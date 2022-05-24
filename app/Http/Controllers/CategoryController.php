<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\Topic;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Category $cate)
    {
        $cate = $cate::orderBy('id_theloai', 'DESC')->paginate(5);
        return view('pages.cate.cate_list',compact("cate"));
    }

    public function show($cate)
    {
        $cate = Category::findOrFail($cate);
        $cate->delete();   
        return redirect()->route('cate.index')->with('success', 'Show is successfully deleted');
    }

    public function create()
    {
        $topic = Topic::get();
        return view('pages.cate.cate_create',compact('topic'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'id_topic' => 'required' 
        ]);
       
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images\cate'), $imageName);
        
        $data = [
            'ten_theloai' => $request->name,
            'hinh_theloai' => "http://127.0.0.1:8000/images/topic". $imageName,
            'id_chude' => $request->id_topic
        ];
        // dd($data);
        Category::create($data);
   
        return redirect()->route('topic.index')->with('success','Product created successfully.');
    }
}
