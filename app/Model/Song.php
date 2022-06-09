<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $table = 'baihat';
    protected $fillable = ['id_baihat', 'id_album', 'id_theloai', 'id_playlist', 'ten_baihat', 'hinh_baihat', 'ten_casi', 'link_baihat'];

    protected $primaryKey = 'id_baihat';

    public function Album(){
        //1 user -> 1 contact
        return $this->belongsTo('App\Model\Album','id_album','id_album');
    }

    public function Category(){
        //1 user -> 1 contact
        return $this->belongsTo('App\Model\Category','id_theloai','id_theloai');
    }

    public function Playlist(){
        //1 user -> 1 contact
        return $this->belongsTo('App\Model\Playlist','id_playlist','id_playlist');
    }
}

