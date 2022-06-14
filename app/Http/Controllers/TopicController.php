<?php

namespace App\Http\Controllers;

use App\Model\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function index(Topic $topic)
    {
        $topic = $topic::orderBy('id_chude', 'DESC')->paginate(5);
        return view('pages.topic.topic_list',compact("topic"));
    }

    // public function edit(Topic $topic)
    // {
    //     return view('pages.topic.topic_edit',compact("topic"));
    // }

    public function show($topic)
    {
        $topic = Topic::findOrFail($topic);
        $topic->delete();   
        return redirect()->route('topic.index')->with('success', 'Show is successfully deleted');
    }

    public function create()
    {
        return view('pages.topic.topic_create');
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
       
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images\topic'), $imageName);
        
        $data = [
            'ten_chude' => $request->name,
            'hinh_chude' => $imageName,
        ];
        // dd($data);
        Topic::create($data);
   
        return redirect()->route('topic.index')->with('success','Product created successfully.');
    }

    public function edit($id)
    {
        $topic = Topic::findOrFail($id);
        return view('pages.topic.topic_edit',compact("topic"));
    }

    public function update(Request $request, $id_chude){
        // dd($id_chude);
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
       
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images\topic'), $imageName);
        
        $data = [
            'ten_chude' => $request->name,
            'hinh_chude' => $imageName,
        ];
        
        $topic = Topic::findOrFail($id_chude)->update($data);

        return redirect()->route('topic.index');
    }
}
