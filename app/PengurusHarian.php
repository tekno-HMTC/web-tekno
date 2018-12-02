<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengurusHarian extends Model
{
    protected $table = 'ph';

    protected $fillable = [
        'departemen',
        'password' 
    ];
}
