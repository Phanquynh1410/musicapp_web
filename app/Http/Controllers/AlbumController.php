<?php

namespace App\Http\Controllers;

use App\Model\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index(Album $album)
    {
        $album = $album::orderBy('id_album', 'DESC')->get();
        return view('pages.album.album_list',compact("album"));
    }

    public function destroy($album)
    {
        $album = Album::findOrFail($album);
        $album->delete();   
        return redirect()->route('album.index')->with('success', 'Show is successfully deleted');
    }
}
