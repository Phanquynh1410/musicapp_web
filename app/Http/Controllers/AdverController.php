<?php

namespace App\Http\Controllers;

use App\Model\Adver;
use Illuminate\Http\Request;

class AdverController extends Controller
{
    public function index(Adver $adver)
    {
        $adver = $adver::orderBy('id_quangcao', 'DESC')->get();
        return view('pages.adver.adver_list',compact("adver"));
    }

    public function destroy($adver)
    {
        $adver = Adver::findOrFail($adver);
        $adver->delete();   
        return redirect()->route('adver.index')->with('success', 'Show is successfully deleted');
    }
}
