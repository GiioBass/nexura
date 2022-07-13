<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'id' => 1,
                'name' => 'Desarrollador'
            ],
            [
                'id' => 2,
                'name' => 'Analista'
            ],
            [
                'id' => 3,
                'name' => 'Tester'
            ],
            [
                'id' => 4,
                'name' => 'Diseñador'
            ],
            [
                'id' => 5,
                'name' => 'Profesional PMO'
            ],
            [
                'id' => 6,
                'name' => 'Profesional de servicios'
            ],
            [
                'id' => 7,
                'name' => 'Auxiliar administrativo'
            ],
            [
                'id' => 8,
                'name' => 'Codirector'
            ]
        ]);
    }
}
