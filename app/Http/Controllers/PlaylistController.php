<?php

namespace App\Http\Controllers;

use App\Model\Playlist;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    public function index(Playlist $playlist)
    {
        $playlist = $playlist::orderBy('id_playlist', 'DESC')->get();
        return view('pages.playlist.playlist_list',compact("playlist"));
    }
}
