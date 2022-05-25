<?php

namespace App\Http\Controllers;

use App\Model\Album;
use App\Model\Category;
use App\Model\Playlist;
use App\Model\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index(Song $song)
    {
        $song = $song::orderBy('id_baihat', 'DESC')->paginate(5);
        return view('pages.song.song_list',compact("song"));
    }

    public function destroy($song)
    {
        $song = Song::findOrFail($song);
        $song->delete();   
        return redirect()->route('song.index')->with('success', 'Show is successfully deleted');
    }

    public function create()
    {
        $album = Album::get();
        $cate = Category::get();
        $playlist = Playlist::get();
        return view('pages.song.song_create',compact('album', 'cate', 'playlist'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'album' => 'required',
            'cate' => 'required',
            'playlist' => 'required',
            'song' => 'required|mimes:application/octet-stream,audio/mpeg,mpga,mp3,wav',
        ]);
       
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images\song'), $imageName);
        
        $songName = time().'.'.$request->song->extension();  
        $request->song->move(public_path('link'), $songName);
        

        $data = [
            'ten_baihat' => $request->name,
            'hinh_baihat' => $imageName,
            'link_baihat' => $songName,
            'id_album' => $request->album,
            'id_theloai' => $request->cate,
            'id_playlist' => $request->playlist
        ];
        Song::create($data);
   
        return redirect()->route('song.index');
    }
}
