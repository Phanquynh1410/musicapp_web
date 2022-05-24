<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Model\Adver;
use Illuminate\Http\Request;

class APIQuangcaoController extends Controller
{
    public function index(Adver $quangCao)
    {
        $QC = $quangCao::leftJoin('baihat', 'baihat.id_baihat', '=', 'quangcao.id_baihat')->select('*')->orderBy('id_quangcao', 'DESC')->limit(3)->get();
        return response()->json($QC);
    }

    public function getquangcao(Adver $quangCao, $id)
    {
        $BH = $quangCao::where('id_quangcao', '=', $id)->leftJoin('baihat', 'baihat.id_baihat', '=', 'quangcao.id_baihat')->select('*')->get();
        return response()->json($BH);
    }
}
