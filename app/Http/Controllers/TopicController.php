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
}
