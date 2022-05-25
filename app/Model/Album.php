<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    
    protected $table = 'album';
    protected $fillable = ['id_album', 'ten_album', 'ten_casi', 'hinh_album'];

    protected $primaryKey = 'id_album';
}
