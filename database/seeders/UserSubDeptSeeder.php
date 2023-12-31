<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSubDeptSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user_sub_departments = [
            [
                'nip' => '19850012023021002',
                'sub_department_id'=>'001002',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nip' => '19850012023021003',
                'sub_department_id'=>'001002',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nip' => '19850012023021004',
                'sub_department_id'=>'001002',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nip' => '19850012023021005',
                'sub_department_id'=>'001002',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nip' => '19850012023021006',
                'sub_department_id'=>'001002',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('user_sub_depts')->insert($user_sub_departments);

    }
}
