<?php

namespace Database\Seeders;

use App\Models\Periodos_academico;
use Illuminate\Database\Seeder;

class Periodos_academicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $codigo=['2021-1','2021-2'];
        $descripcion=['Primer semestre del 2021','Segundo semestre del 2021'];


        for($i=0;$i<count($codigo);$i++){

            $nuevo = new Periodos_academico();
            $nuevo->codigo = $codigo[$i];
            $nuevo->descripcion = $descripcion[$i];
            $nuevo->save();
        }
    }
}
