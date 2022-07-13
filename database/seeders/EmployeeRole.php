<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeRole extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employee_role')->insert(
            [
                [
                    'id' => 1,
                    'employee_id' => 1,
                    'role_id' => 4
                ],
                [
                    'id' => 2,
                    'employee_id' => 1,
                    'role_id' => 7
                ],
                [
                    'id' => 3,
                    'employee_id' => 1,
                    'role_id' => 2
                ],
                [
                    'id' => 4,
                    'employee_id' => 2,
                    'role_id' => 1
                ],
                [
                    'id' => 5,
                    'employee_id' => 2,
                    'role_id' => 2
                ]
            ]
        );
    }
}
