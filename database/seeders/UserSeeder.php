<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Wahyu Sobirin',
                'nip' => '200310012023021001',
                'telephone' => '085899721589',
                'email' => 'wsobirin2@gmail.com',
                'password' => bcrypt('secret'),
                'created_at' => now(),
                'updated_at' => now(),
                'role_id' => 1,
                'department_id' => '001'
            ],
            [
                'name' => 'Maulana Muhammad',
                'nip' => '20030012023021002',
                'telephone' => '085899721590',
                'email' => 'maulanam@gmail.com',
                'password' => bcrypt('secret'),
                'created_at' => now(),
                'updated_at' => now(),
                'role_id' => 1,
                'department_id' => '001'
            ],

            [
                'name' => 'Catur Waras',
                'nip' => '19850012023021001',
                'telephone' => '08123459876',
                'email' => 'catur@gmail.com',
                'password' => bcrypt('secret'),
                'created_at' => now(),
                'updated_at' => now(),
                'role_id' => 1,
                'department_id' => '002'
            ],
            [
                'name' => 'Bagus Malikan',
                'nip' => '19850012023021002',
                'telephone' => '08987612345',
                'email' => 'bagus@gmail.com',
                'password' => bcrypt('secret'),
                'created_at' => now(),
                'updated_at' => now(),
                'role_id' => 1,
                'department_id' => '002'
            ],

            [
                'name' => 'Tjipto Sambudi',
                'nip' => '19850012023021003',
                'telephone' => '08123456789',
                'email' => 'tjipto@gmail.com',
                'password' => bcrypt('secret'),
                'created_at' => now(),
                'updated_at' => now(),
                'role_id' => 2,
                'department_id' => '002'
            ],
            [
                'name' => 'Husni Mubarak',
                'nip' => '19850012023021004',
                'telephone' => '08987654321',
                'email' => 'husni@gmail.com',
                'password' => bcrypt('secret'),
                'created_at' => now(),
                'updated_at' => now(),
                'role_id' => 2,
                'department_id' => '002'
            ],
            [
                'name' => 'Aulia Lia',
                'nip' => '19850012023021005',
                'telephone' => '081221331441',
                'email' => 'aulialia@gmail.com',
                'password' => bcrypt('secret'),
                'created_at' => now(),
                'updated_at' => now(),
                'role_id' => 3,
                'department_id' => '002'
            ],
            [
                'name' => 'Siti Maryam',
                'nip' => '19850012023021006',
                'telephone' => '081222332442',
                'email' => 'smaryam@gmail.com',
                'password' => bcrypt('secret'),
                'created_at' => now(),
                'updated_at' => now(),
                'role_id' => 2,
                'department_id' => '002'
            ],

            [
                'name' => 'Husen Ali Mahfud',
                'nip' => '19900012023021001',
                'telephone' => '081020304050',
                'email' => 'husen@gmail.com',
                'password' => bcrypt('secret'),
                'created_at' => now(),
                'updated_at' => now(),
                'role_id' => 1,
                'department_id' => '003'
            ],
            [
                'name' => 'Huda',
                'nip' => '19900012023021002',
                'telephone' => '081121314151',
                'email' => 'huda@gmail.com',
                'password' => bcrypt('secret'),
                'created_at' => now(),
                'updated_at' => now(),
                'role_id' => 4,
                'department_id' => '003'
            ],
            [
                'name' => 'Rendy Novanda',
                'nip' => '19900012023021003',
                'telephone' => '081121314152',
                'email' => 'rendynov@gmail.com',
                'password' => bcrypt('secret'),
                'created_at' => now(),
                'updated_at' => now(),
                'role_id' => 4,
                'department_id' => '003'
            ],

            [
                'name' => 'Reny Laila',
                'nip' => '19870012023021001',
                'telephone' => '086171819110',
                'email' => 'reny@gmail.com',
                'password' => bcrypt('secret'),
                'created_at' => now(),
                'updated_at' => now(),
                'role_id' => 1,
                'department_id' => '004'
            ],
            [
                'name' => 'Dita Kusumajaya',
                'nip' => '19870012023021002',
                'telephone' => '086272829211',
                'email' => 'ditakus@gmail.com',
                'password' => bcrypt('secret'),
                'created_at' => now(),
                'updated_at' => now(),
                'role_id' => 5,
                'department_id' => '004'
            ],
            [
                'name' => 'Nova Aristawati',
                'nip' => '19870012023021003',
                'telephone' => '086373839312',
                'email' => 'novaar@gmail.com',
                'password' => bcrypt('secret'),
                'created_at' => now(),
                'updated_at' => now(),
                'role_id' => 6,
                'department_id' => '004'
            ],

            [
                'name' => 'Mahmud Wahid',
                'nip' => '19950012023021001',
                'telephone' => '081122334455',
                'email' => 'mahmudw@gmail.com',
                'password' => bcrypt('secret'),
                'created_at' => now(),
                'updated_at' => now(),
                'role_id' => 1,
                'department_id' => '005'
            ],
            [
                'name' => 'Siti Nur Maghfiroh',
                'nip' => '19950012023021002',
                'telephone' => '081122334451',
                'email' => 'snmaghfiroh@gmail.com',
                'password' => bcrypt('secret'),
                'created_at' => now(),
                'updated_at' => now(),
                'role_id' => 7,
                'department_id' => '005'
            ],
            [
                'name' => 'Ummi Sadiyah',
                'nip' => '19950012023021003',
                'telephone' => '081122334452',
                'email' => 'sadiyah@gmail.com',
                'password' => bcrypt('secret'),
                'created_at' => now(),
                'updated_at' => now(),
                'role_id' => 7,
                'department_id' => '005'
            ],
        ];
        DB::table('users')->insert($users);

    }
}
