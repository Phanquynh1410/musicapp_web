<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $table = 'baihat';
    protected $fillable = ['*'];

    protected $primaryKey = 'id_baihat';
}
