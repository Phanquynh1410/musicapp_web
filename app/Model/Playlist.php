<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    protected $table = 'playlist';
    protected $fillable = ['id_playlist','ten_playlist','hinhnen','hinhicon'];

    protected $primaryKey = 'id_playlist';

    public function Song(){
        //1 user -> 1 contact
        return $this->hasMany('App\Model\Song','id_playlist','id_playlist');
    }
}
