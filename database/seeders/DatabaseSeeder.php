<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Facades\App;
use App\Models\Post;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        \App\Models\User::factory()->create([
//            "name" => "admin",
//            "email" => "admin@gmail.com",
////            'email_verified_at' => now(),
//            "password" => Hash::make("admin"),
//            'remember_token' => Str::random(10),
//        ]);
//        \App\Models\User::factory(10)->create();
//
//         $categories = ["IT News", "Food and Drink", "Travel", "Economics News", "Politics News"];
//         foreach ($categories as $category){
//             Category::factory()->create([
//                 "title" => $category,
//                 "slug" => Str::slug($category),
//                 "user_id" =>  \App\Models\User::inRandomOrder()->first()->id
//             ]);
//         }
         Post::factory(100)->create();
    }
}
