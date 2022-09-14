<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Facades\App;
use App\Models\Post;
use Database\Seeders\CategorySeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            NationSeeder::class,
            UserSeeder::class,
           CategorySeeder::class,
           PostSeeder::class
        ]);

//        $photos = Storage::allFiles("public");
//        array_shift($photos);
//	Storage::delete($photos);
//        echo "\e[91mStorage Cleaned\n";
    }
}
