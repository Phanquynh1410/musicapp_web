<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Topic;

class Category extends Model
{
    protected $table = 'theloai';
    protected $fillable = ['id_theloai','id_chude','ten_theloai','hinh_theloai'];

    protected $primaryKey = 'id_theloai';

    
    public function Topic(){
        //1 user -> 1 contact
        return $this->belongsTo('App\Model\Topic','id_chude','id_chude');
    }
}
