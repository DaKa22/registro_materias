<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodos_academico extends Model
{
    use HasFactory;
    protected $fillable = [

        'codigo',
        'descripcion',



    ];
    public function matricula_materias()
    {
        return $this->hasMany('App\Models\matricula_materia','periodos_academicos_id');
    }
}
