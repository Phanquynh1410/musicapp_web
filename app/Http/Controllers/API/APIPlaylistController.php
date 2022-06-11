<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Model\Playlist;
use App\Model\Song;
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

    public function detail(Playlist $playlist, Song $song)
    {
        $BH = $playlist::with('Song')->get();
        $BH = $playlist::get();
        foreach($BH as $value){
            $list = $song::where('id_playlist', $value['id_playlist'])->get();
            $obj[] = array(
                'id_playlist'=>$value['id_playlist'],
                'ten_playlist'=>$value['ten_playlist'],
                'hinhnen'=>$value['hinhnen'],
                'hinhicon'=>$value['hinhicon'],
                'list'=> $list
            );
        }
        return response()->json(['playlist' => $obj]);
    }
}

        
        
     
