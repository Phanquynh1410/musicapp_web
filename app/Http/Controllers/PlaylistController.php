<?php

namespace App\Http\Controllers;

use App\Model\Playlist;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    public function index(Playlist $playlist)
    {
        $playlist = $playlist::orderBy('id_playlist', 'DESC')->paginate(5);
        return view('pages.playlist.playlist_list',compact("playlist"));
    }

    public function show($playlist)
    {
        $playlist = Playlist::findOrFail($playlist);
        $playlist->delete();   
        return redirect()->route('playlist.index')->with('success', 'Show is successfully deleted');
    }

    public function create()
    {
        return view('pages.playlist.playlist_create');
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required',
            'imagebg' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imageicon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
       
        $imageBG = time().'.'.$request->imagebg->extension();  
        $request->imagebg->move(public_path('images\playlist\bg'), $imageBG);

        $imageicon = time().'.'.$request->imageicon->extension();  
        $request->imageicon->move(public_path('images\playlist\icon'), $imageicon);
        
        $data = [
            'ten_playlist' => $request->name,
            'hinhnen' => $imageBG,
            'hinhicon' => $imageicon
        ];
        // dd($data);
        Playlist::create($data);
   
        return redirect()->route('playlist.index');
    }
}
