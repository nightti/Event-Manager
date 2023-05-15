<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'title' => 'Music',
        ]);
        Category::create([
            'title' => 'Sports',
        ]);
        Category::create([
            'title' => 'Food',
        ]);
    }
}
