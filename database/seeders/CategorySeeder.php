<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Back End',
            'slug' => 'back-end'
        ]);
        Category::create([
            'name' => 'Front End',
            'slug' => 'front-end'
        ]);
        Category::create([
            'name' => 'Grafik Design',
            'slug' => 'grafik-design'
        ]);
        Category::create([
            'name' => 'UI UX',
            'slug' => 'ui-ux'
        ]);
        Category::create([
            'name' => 'Machine Learning',
            'slug' => 'machine-learning'
        ]);

    }
}
