<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $table = 'chude';
    protected $fillable = ['id_chude','ten_chude', 'hinh_chude',];

    protected $primaryKey = 'id_chude';
}
