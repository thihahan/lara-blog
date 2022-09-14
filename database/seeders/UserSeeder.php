<?php

namespace Database\Seeders;

use App\Models\Nation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            "name" => "admin",
            "email" => "admin@gmail.com",
            "role" => "admin",
//            'email_verified_at' => now(),
            "password" => Hash::make("admin"),
            "nation_id" => Nation::inRandomOrder()->first()->id,
            'remember_token' => Str::random(10),
        ]);
        \App\Models\User::factory()->create([
            "name" => "editor",
            "email" => "editor@gmail.com",
            "role" => "editor",
//            'email_verified_at' => now(),
            "password" => Hash::make("editor"),
            "nation_id" => Nation::inRandomOrder()->first()->id,
            'remember_token' => Str::random(10),
        ]);
        \App\Models\User::factory()->create([
            "name" => "author",
            "email" => "author@gmail.com",
            "role" => "author",
//            'email_verified_at' => now(),
            "password" => Hash::make("author"),
            "nation_id" => Nation::inRandomOrder()->first()->id,
            'remember_token' => Str::random(10),
        ]);
        \App\Models\User::factory(10)->create();
    }
}
