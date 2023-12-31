<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = [
            [
                'department_id' => '001',
                'department_name' => 'Administrasi Manajemen',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'department_id' => '002',
                'department_name' => 'Poliklinik',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'department_id' => '003',
                'department_name' => 'Farmasi',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'department_id' => '004',
                'department_name' => 'Laboratorium',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'department_id' => '005',
                'department_name' => 'Keuangan',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];
        DB::table('departments')->insert($departments);

    }
}
