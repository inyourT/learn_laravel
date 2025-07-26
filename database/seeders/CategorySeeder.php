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
            'name' => 'Web Design',
            'slug' => 'web-design',
            'color' => 'red'
        ]);
        Category::create([
            'name' => 'Mesin Learning',
            'slug' => 'mesin-learning',
            'color' => 'blue'
        ]);

        Category::create([
            'name' => 'Data Analys',
            'slug' => 'data-analys',
            'color' => 'yellow'
        ]);

        Category::create([
            'name' => 'UI/UX',
            'slug' => 'ui-ux',
            'color' => 'gray',
        ]);

        Category::create([
            'name' => 'Beckend Programing',
            'slug' => 'be-prog',
            'color' => 'green'
        ]);
    }
}
