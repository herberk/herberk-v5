<?php

namespace App\Tablas;

use Illuminate\Database\Eloquent\Model;

class glosas extends Model
{
    protected $table = 'glosas';
    protected $fillable = ['name','desglosas_id'];
}
