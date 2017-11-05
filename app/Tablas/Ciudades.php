<?php

namespace App\Tablas;

use Illuminate\Database\Eloquent\Model;

class Ciudades extends Model
{
    protected $table = 'Ciudades';

    protected $fillable = ['name'];
}
