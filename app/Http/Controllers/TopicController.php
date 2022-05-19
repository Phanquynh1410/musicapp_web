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

    // public function destroy($id)
    // {
    //     $topic = Topic::findOrFail($id);
    //     $topic->delete();

    //     return redirect('/index')->with('success', 'Show is successfully deleted');
    // }
}
