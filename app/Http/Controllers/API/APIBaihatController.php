<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Model\Song;
use Illuminate\Http\Request;

class APIBaihatController extends Controller
{
    function search($name)
    {
        $result1 = Song::where('ten_baihat' , 'LIKE', '%'. $name. '%')->get();
        $result2 = Song::where('ten_casi' , 'LIKE', '%'. $name. '%')->get();
        $result = $result1->merge($result2);
        if(count($result)){
         return Response()->json($result);
        }
        else
        {
        return response()->json(['Result' => 'No Data not found'], 404);
      }
    }

    public function getsong(Song $song)
    {
        $BH = $song::select('ten_baihat','hinh_baihat','link_baihat')->get();
        foreach($BH as $key => $value){
            $list[]['list'] = $value;
        }
        return response()->json(['list' => $list]);
    }
}
