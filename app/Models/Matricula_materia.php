<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matricula_materia extends Model
{
    use HasFactory;
    protected $fillable = [

        'users_id',
        'periodos_academicos_id',
        'materias_id'



    ];
    public function users()
    {
        return $this->belongsTo('App\Models\user');
    }
    public function periodos_academicos()
    {
        return $this->belongsTo('App\Models\periodos_academico');
    }
    public function materias()
    {
        return $this->belongsTo('App\Models\materia');
    }
}
