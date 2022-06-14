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
            'singer' => 'required'
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
            'id_playlist' => $request->playlist,
            'ten_casi' => $request->singer
        ];
        Song::create($data);
   
        return redirect()->route('song.index');
    }

    public function show(Song $song)
    {
        $album = Album::get();
        $cate = Category::get();
        $playlist = Playlist::get();
        return view('pages.song.song_detail',compact('song','album', 'cate', 'playlist'));
    }

    public function edit($id)
    {
        $song = Song::findOrFail($id);
        $album = Album::get();
        $cate = Category::get();
        $playlist = Playlist::get();
        return view('pages.song.song_edit',compact("song","album", "cate", "playlist"));
    }

    public function update(Request $request, $id_baihat){
        // dd($id_baihat);
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'album' => 'required',
            'cate' => 'required',
            'playlist' => 'required',
            'song' => 'required|mimes:application/octet-stream,audio/mpeg,mpga,mp3,wav',
            'singer' => 'required'
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
            'id_playlist' => $request->playlist,
            'ten_casi' => $request->singer
        ];
        $song = Song::findOrFail($id_baihat)->update($data);

        return redirect()->route('song.index');
    }

    public function search()
    {

        $name = $_GET['query'];
        $result1 = Song::where('ten_baihat' , 'LIKE', '%'. $name. '%')->get();
        $result2 = Song::where('ten_casi' , 'LIKE', '%'. $name. '%')->get();
        $song = $result1->merge($result2);
        $album = Album::get();
        $cate = Category::get();
        $playlist = Playlist::get();
        return view('pages.song.song_search',compact("song","album", "cate", "playlist"));
    }
}
