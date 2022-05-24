<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Model\Album;
use Illuminate\Http\Request;

class APIAlbumController extends Controller
{
    public function index(Album $album)
    {
        $AL = $album::orderBy('id_album', 'DESC')->limit(3)->get();
        return response()->json($AL);
    }

    public function show(Album $album)
    {
        $AL = $album::orderBy('id_album', 'DESC')->get();
        return response()->json($AL);
    }

    public function getalbum(Album $album, $id)
    {
        $BH = $album::leftJoin('baihat', 'baihat.id_album', '=', 'album.id_album')->where('album.id_album', '=', $id)->select('*')->get();
        return response()->json($BH);
    }
}
