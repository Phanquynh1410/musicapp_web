<?php

namespace App\Http\Controllers;

use App\Model\Adver;
use App\Model\Song;
use Illuminate\Http\Request;

class AdverController extends Controller
{
    public function index(Adver $adver)
    {
        $adver = $adver::orderBy('id_quangcao', 'DESC')->paginate(5);
        return view('pages.adver.adver_list',compact("adver"));
    }

    public function show($adver)
    {
        $adver = Adver::findOrFail($adver);
        $adver->delete();   
        return redirect()->route('adver.index')->with('success', 'Show is successfully deleted');
    }

    public function create()
    {
        $song = Song::get();
        return view('pages.adver.adver_create',compact('song'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required',
            'id_song' => 'required' 
        ]);
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images\adver'), $imageName);
        
        $data = [
            'noidung' => $request->content,
            'hinh_quangcao' => $imageName,
            'id_baihat' => $request->id_song
        ];
        
        Adver::create($data);
        return redirect()->route('adver.index');
    }
}
