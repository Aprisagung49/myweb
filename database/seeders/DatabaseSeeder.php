<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Article;
use App\Models\Biodata;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        $this->call([CategorySeeder::class, UserSeeder::class, BiodatasSeeder::class]);
        Article::factory(100)->recycle([
        Category::all(),
        User::all(),
        Biodata::all()
        ])->create();


        
    }
}
