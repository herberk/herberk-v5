<?php

namespace App\Tablas;
use Illuminate\Database\Eloquent\Model;

class Regiones extends Model
{
    protected $table = 'Regiones';

    protected $fillable = ['name'];

    Public function comunas()
    {
        return $this->hasMany(Comunas::getClass());
    }
}
