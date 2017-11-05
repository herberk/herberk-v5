<?php

namespace App\Tablas;

use Illuminate\Database\Eloquent\Model;

class Comunas extends Model
{
    protected $table = 'Comunas';

    protected $fillable = ['name'];
}
