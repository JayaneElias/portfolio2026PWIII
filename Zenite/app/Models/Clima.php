<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clima extends Model
{
    protected $fillable = [
        'user_id',
        'data_registro',
        'regiao',
        'relato',
    ];

    protected $casts = [
        'data_registro' => 'date',
    ];
}