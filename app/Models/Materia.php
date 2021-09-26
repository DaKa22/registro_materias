<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;
    protected $fillable = [

        'codigo_materia',
        'descripcion',



    ];
    public function matricula_materias()
    {
        return $this->hasMany('App\Models\matricula_materia','materias_id');
    }
}
