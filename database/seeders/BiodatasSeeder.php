<?php

namespace Database\Seeders;

use App\Models\Biodata;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BiodatasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Biodata::create([
        'nama' => 'Apris Agung Wiresa',
        'alamat' => 'Jalan Jatihandap Timur Bandung',
        'summary' => 'Hello my name is Apris'

        ]);
    }
}
