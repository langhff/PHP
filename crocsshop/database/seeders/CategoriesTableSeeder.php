<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['code' => 'characters', 'name' => 'Characters'],
            ['code' => 'food', 'name' => 'Food & Drink'],
            ['code' => 'animals', 'name' => 'Animals'],
            ['code' => 'jewels', 'name' => 'Jewels & Metals'],
            ['code' => 'sports', 'name' => 'Sports'],
            ['code' => 'travel', 'name' => 'Travel & Adventure'],
            ['code' => 'hobbies', 'name' => 'Hobbies & Interests'],
            ['code' => 'symbols', 'name' => 'Symbols & Sayings'],
        ]);
    }
}
