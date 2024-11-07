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
        $categoryNames = [
            "Horror",
            "Thriller",
            "Comedy",
            "Drama",
            "Sci-fi",
            "Fantasy"
        ];

        foreach ($categoryNames as $name) {
            $category = new Category();
            $category->name = $name;
            $category->save();
        }
    }
}
