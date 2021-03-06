<?php

namespace App\Tablas;

use Illuminate\Database\Eloquent\Model;

class giros extends Model
{
    protected $table = 'giros';
    protected $fillable = ['name','afecto','desgiros_id'];

    public function desgiros()
    {
        return $this->hasOne('desgiros');
    }

    Public static function filterAndPaginate($name,$type,$codigo)
    {
        return Giros::name($name)
            ->codigo($codigo)
            ->type($type)
            ->orderBy('id')
            ->paginate(15);
    }
    public function scopeName($query, $name)
    {
        if (trim($name) !="")
        {
            $query->where('name',"LIKE", "%$name%");
        }
    }
    public function scopeType($query, $type)
    {
        if (trim($type) != "")
        {
            $query->where('desgiros_id',$type);
        }
    }
    public function scopeCodigo($query, $codigo)
    {
        if (trim($codigo) !="")
        {
            $query->where('codigo',"LIKE", "%$codigo%");
        }
    }
}
