<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Model\Topic;
use Illuminate\Http\Request;

class APIChudeController extends Controller
{
    public function index(Topic $chude)
    {
        $CD = $chude::orderBy('id_chude', 'DESC')->limit(3)->get();
        return response()->json($CD);
    }

    public function show(Topic $chude)
    {
        $CD = $chude::orderBy('id_chude', 'DESC')->get();
        return response()->json($CD);
    }

    public function getchude(Topic $chude, $id)
    {
        $TL = $chude::leftJoin('theloai', 'theloai.id_chude', '=', 'chude.id_chude')->where('chude.id_chude', '=', $id)->select('*')->get();
        return response()->json($TL);
    }
}
