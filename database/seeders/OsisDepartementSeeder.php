<?php

namespace Database\Seeders;

use App\Models\OsisDepartement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OsisDepartementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $osisDepartement =  [
            [
                'uuid' => Str::uuid(),
                'name' => 'Bela Negara',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'uuid' => Str::uuid(),
                'name' => 'Keagaman',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'uuid' => Str::uuid(),
                'name' => 'Kesenian',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'uuid' => Str::uuid(),
                'name' => 'Umum',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'uuid' => Str::uuid(),
                'name' => 'Bahasa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'uuid' => Str::uuid(),
                'name' => 'Tik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        OsisDepartement::insert($osisDepartement);
    }
}
