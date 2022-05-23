<?php

namespace App\Http\Controllers;

use App\Model\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function index(Topic $topic)
    {
        $topic = $topic::orderBy('id_chude', 'DESC')->get();
        return view('pages.topic.topic_list',compact("topic"));
    }

    // public function edit(Topic $topic)
    // {
    //     return view('pages.topic.topic_edit',compact("topic"));
    // }

    public function destroy($topic)
    {
        $topic = Topic::findOrFail($topic);
        $topic->delete();   
        return redirect()->route('topic.index')->with('success', 'Show is successfully deleted');
    }

    public function create()
    {
        return view('pages.topic.topic_create');
    }
}
