<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = [
        'nome', 'porte', 'raça', 'cor',
    ];
}
