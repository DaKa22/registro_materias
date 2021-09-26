<?php

namespace Database\Seeders;

use App\Models\Matricula_materia;
use Illuminate\Database\Seeder;

class Matricula_materiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users_id=[1,2];
        $periodos_academicos_id=[1,2];
        $materias_id=[1,2];


        for($i=0;$i<count($users_id);$i++){

            $nuevo = new Matricula_materia();
            $nuevo->users_id = $users_id[$i];
            $nuevo->periodos_academicos_id = $periodos_academicos_id[$i];
            $nuevo->materias_id = $materias_id[$i];
            $nuevo->save();
        }
    }
}
