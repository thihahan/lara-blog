<?php

namespace Database\Seeders;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ["IT News", "Food and Drink", "Travel", "Economics News", "Politics News"];
         foreach ($categories as $category){
             Category::factory()->create([
                 "title" => $category,
                 "slug" => Str::slug($category),
                 "user_id" =>  \App\Models\User::inRandomOrder()->first()->id
             ]);
         }
    }
}
