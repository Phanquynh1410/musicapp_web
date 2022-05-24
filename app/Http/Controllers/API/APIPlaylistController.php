<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Model\Playlist;
use Illuminate\Http\Request;

class APIPlaylistController extends Controller
{
    public function index(Playlist $playlist)
    {
        $PL = $playlist::orderBy('id_playlist', 'DESC')->limit(3)->get();
        return response()->json($PL);
    }


    public function show(Playlist $playlist)
    {
        $PL = $playlist::orderBy('id_playlist', 'DESC')->get();
        return response()->json($PL);
    }

    public function getplaylist(Playlist $playlist, $id)
    {
        $BH = $playlist::leftJoin('baihat', 'baihat.id_playlist', '=', 'playlist.id_playlist')->where('playlist.id_playlist', '=', $id)->select('*')->get();
        return response()->json($BH);
    }
}
