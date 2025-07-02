<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('kategori')->insert([
            [
                'nama'       => 'Makanan',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama'       => 'Minuman',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
