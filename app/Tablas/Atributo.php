<?php

namespace App\Tablas;

use Illuminate\Database\Eloquent\Model;

class Atributo extends Model
{
    protected $table = 'atributos';
    protected $fillable = [
        'name',
        'codigo',
        'tipos_id'
    ];

    public function tipos() {
        return $this->belongsTo('App\Tablas\Tipo');
    }
}
