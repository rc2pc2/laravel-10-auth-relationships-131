<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $userIds = User::all()->pluck("id"); // [1, 2, 3]
        $categoryIds = Category::all()->pluck("id");

        for ($i=0; $i < 50; $i++) {
            $newPost = new Post();
            $newPost->category_id = $faker->randomElement($categoryIds);
            $newPost->user_id = $faker->randomElement($userIds);
            $newPost->title = $faker->unique->realTextBetween(5, 30);
            $newPost->content = $faker->realTextBetween(350, 800);
            $newPost->save();
        }
    }
}
