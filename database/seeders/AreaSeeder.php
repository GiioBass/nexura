<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert(
            [
                [
                    'id' => 1,
                    'name' => 'Ingeniería'
                ],
                [
                    'id' => 2,
                    'name' => 'Desarrollo de Negocio'
                ],
                [
                    'id' => 3,
                    'name' => 'Proyectos'
                ],
                [
                    'id' => 4,
                    'name' => 'Servicios'
                ],
                [
                    'id' => 5,
                    'name' => 'Calidad'
                ]
            ]
        );
    }
}
