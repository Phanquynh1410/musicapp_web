<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Adver extends Model
{
        
    protected $table = 'quangcao';
    protected $fillable = ['*'];

    protected $primaryKey = 'id_quangcao';
}
