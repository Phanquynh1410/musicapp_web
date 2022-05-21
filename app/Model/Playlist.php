<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    protected $table = 'playlist';
    protected $fillable = ['*'];

    protected $primaryKey = 'id_playlist';
}
