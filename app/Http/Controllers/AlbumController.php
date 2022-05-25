<?php

namespace App\Http\Controllers;

use App\Model\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index(Album $album)
    {
        $album = $album::orderBy('id_album', 'DESC')->paginate(5);
        return view('pages.album.album_list',compact("album"));
    }

    public function show($album)
    {
        $album = Album::findOrFail($album);
        $album->delete();   
        return redirect()->route('album.index')->with('success', 'Show is successfully deleted');
    }

    public function create()
    {
        return view('pages.album.album_create');
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'singer' => 'required'
        ]);
       
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images\album'), $imageName);
        
        $data = [
            'ten_album' => $request->name,
            'hinh_album' => $imageName,
            'ten_casi' => $request->singer
        ];
        Album::create($data);
   
        return redirect()->route('album.index')->with('success','Product created successfully.');
    }
}
