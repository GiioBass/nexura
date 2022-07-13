<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert(
            [
                [
                    'id'=> 1,
                    'name' => 'Pedro Pérez',
                    'email' => 'pperez@example.co',
                    'gender' => 'M',
                    'area_id' => 2,
                    'bulletin' => 1,
                    'description' => 'Hola Mundo'
                ],
                [
                    'id' => 2,
                    'name' => 'Amalia Bayona',
                    'email' => 'abayona@example.co',
                    'gender' => 'F',
                    'area_id' => 5,
                    'bulletin' => 0,
                    'description' => 'Para contactar a Amalia Bayona, puede escribir al ...'
                ]
            ]
        );
    }
}
