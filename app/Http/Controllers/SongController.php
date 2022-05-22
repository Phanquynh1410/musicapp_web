<?php

namespace App\Http\Controllers;

use App\Model\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index(Song $song)
    {
        $song = $song::orderBy('id_baihat', 'DESC')->get();
        return view('pages.song.song_list',compact("song"));
    }
}
