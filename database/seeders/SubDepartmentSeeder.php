<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubDepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sub_departments = [
            [
                'sub_department_id' => '001002',
                'sub_department_name' => 'Gigi dan Mulut',
                'department_id' => '002',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'sub_department_id' => '002002',
                'sub_department_name' => 'Anak',
                'department_id' => '002',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'sub_department_id' => '003002',
                'sub_department_name' => 'Obgyn',
                'department_id' => '002',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'sub_department_id' => '004002',
                'sub_department_name' => 'Mata',
                'department_id' => '002',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'sub_department_id' => '005002',
                'sub_department_name' => 'THT',
                'department_id' => '002',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];
        DB::table('sub_departments')->insert($sub_departments);
    }
}
