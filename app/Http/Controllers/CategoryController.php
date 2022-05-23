<?php

namespace App\Http\Controllers;

use App\Model\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Category $cate)
    {
        $cate = $cate::orderBy('id_theloai', 'DESC')->get();
        return view('pages.cate.cate_list',compact("cate"));
    }

    public function destroy($cate)
    {
        $cate = Category::findOrFail($cate);
        $cate->delete();   
        return redirect()->route('cate.index')->with('success', 'Show is successfully deleted');
    }
}
