<?php

namespace App\tablas;

use Illuminate\Database\Eloquent\Model;

class desglosas extends Model
{
    protected $table = 'desglosas';
    protected $fillable = ['name'];

    Public function glosas()
    {
        return $this->hasMany(Glosas::getClass());
    }
}
