<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Adver extends Model
{
        
    protected $table = 'quangcao';
    protected $fillable = ['id_quangcao','hinh_quangcao','id_baihat'];

    protected $primaryKey = 'id_quangcao';

     
    public function Song(){
        //1 user -> 1 contact
        return $this->belongsTo('App\Model\Song','id_baihat','id_baihat');
    }
}
