<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    protected $table = 'playlist';
    protected $fillable = ['id_playlist','ten_playlist','hinhnen','hinhicon'];

    protected $primaryKey = 'id_playlist';
}
