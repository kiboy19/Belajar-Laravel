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
            'name' => 'Cyber Security',
            'slug' => 'cyber-security',            
            'color' => 'red'            
        ]);

        Category::create([
            'name' => 'Technology',
            'slug' => 'technology',
            'color' => 'green'            
        ]);

        Category::create([
            'name' => 'Informations',
            'slug' => 'informations',
            'color' => 'blue'            
        ]);

        Category::create([
            'name' => 'Tips',
            'slug' => 'tips',
            'color' => 'yellow'            
        ]);
    }
}
