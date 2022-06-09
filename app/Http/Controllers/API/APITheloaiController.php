<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Model\Category;
use Illuminate\Http\Request;

class APITheloaiController extends Controller
{
    public function index(Category $theloai)
    {
        $TL = $theloai::leftJoin('chude', 'theloai.id_chude', '=', 'chude.id_chude')->select('*')->orderBy('id_theloai', 'DESC')->limit(3)->get();
        return response()->json($TL);
    }

    public function gettheloai(Category $theloai, $id)
    {
        $BH = $theloai::leftJoin('baihat', 'baihat.id_theloai', '=', 'theloai.id_theloai')->where('theloai.id_theloai', '=', $id)->select('*')->get();
        return response()->json($BH);
    }
}
