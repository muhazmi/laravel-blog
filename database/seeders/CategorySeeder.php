<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentTimestamp = Carbon::now();

        $datas = [
            ['name' => 'Politic', 'slug' => 'politic', 'created_at' => $currentTimestamp],
            ['name' => 'Economy', 'slug' => 'economy', 'created_at' => $currentTimestamp],
            ['name' => 'Sport', 'slug' => 'sport', 'created_at' => $currentTimestamp],
            ['name' => 'Entertainment', 'slug' => 'entertainment', 'created_at' => $currentTimestamp],
            ['name' => 'Health', 'slug' => 'health', 'created_at' => $currentTimestamp],
        ];

        // Memasukkan data kategori ke dalam tabel "categories"
        DB::table('categories')->insert($datas);
    }
}