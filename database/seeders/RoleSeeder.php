<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'role_name' => 'administrator',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'role_name' => 'Dokter',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'role_name' => 'Perawat',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'role_name' => 'Apoteker',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'role_name' => 'Laboran',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'role_name' => 'Asisten Laboran',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'role_name' => 'Kasir',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];
        DB::table('roles')->insert($roles);

    }
}
