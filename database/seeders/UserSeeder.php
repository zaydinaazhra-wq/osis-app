<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'zaidina',
                'email' => 'zydnazhra@gmail.com',
                'password' => bcrypt('password'),
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rangga Operator',
                'email' => 'rangga@gmail.com',
                'password' => bcrypt('password'),
                'role' => 'operator',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        User::insert($users);
    }
}
