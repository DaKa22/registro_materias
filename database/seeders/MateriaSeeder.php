<?php

namespace Database\Seeders;

use App\Models\Materia;
use Illuminate\Database\Seeder;

class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $codigo_materia=[1003805,1003800];
        $descripcion=['Matematicas Aplicada','Matematica Logica'];


        for($i=0;$i<count($codigo_materia);$i++){

            $nuevo = new Materia();
            $nuevo->codigo_materia = $codigo_materia[$i];
            $nuevo->descripcion = $descripcion[$i];
            $nuevo->save();
        }
    }
}
