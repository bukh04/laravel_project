<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\Products;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Category::factory(20)->create();
        $tags = Tag::factory(50)->create();
        $posts = Post::factory(100)->create();
        $products = Products::factory(100)->create();

        foreach ($posts as $post){
            $tagsIds = $tags->random(5)->pluck('id');
            $post ->tags()->attach($tagsIds);
        }
        foreach ($products as $product){
            $tagsIds = $tags->random(5)->pluck('id');
            $product ->tags()->attach($tagsIds);
        }
    }
}
