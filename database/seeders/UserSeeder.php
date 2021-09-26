<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nombre1 = ['DaKa','Laura'];
        $nombre2 = ['kada','Daniela'];
        $apellido1 =['Root','Vargas'];
        $apellido2 =['Roots','Perdomo'];
        $email =['DaKa@Admin.com','lauravargas@gmail.com'];
        $telefono=[3112305555,3112300000];
        $fecha_nacimiento=['2002-04-16','2003-06-16'];
        $cedula=[1003805555,1003800000];
        $codigo_estudiante=[1003805555,1003800000];
        $genero=[true,false];
        $nacionalidad=[false,true];

        for($i=0;$i<count($nombre1);$i++){

            $nuevo = new User();
            $nuevo->cedula =$cedula[$i];
            $nuevo->codigo_estudiante =$codigo_estudiante[$i];
            $nuevo->nombre1 =$nombre1[$i];
            $nuevo->nombre2 =$nombre2[$i];
            $nuevo->apellido1 =$apellido1[$i];
            $nuevo->apellido2 =$apellido2[$i];
            $nuevo->telefono =$telefono[$i];
            $nuevo->email = $email[$i];
            $nuevo->genero = $genero[$i];
            $nuevo->nacionalidad =$nacionalidad[$i];
            $nuevo->fecha_nacimiento = $fecha_nacimiento[$i];
            $nuevo->save();
        }

    }
}
