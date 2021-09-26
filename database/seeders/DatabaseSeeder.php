<?php

namespace Database\Seeders;

use App\Models\Materia;
use App\Models\Matricula_materia;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            MateriaSeeder::class,
            Periodos_academicoSeeder::class,
            Matricula_materiaSeeder::class,
        ]);
    }
}
