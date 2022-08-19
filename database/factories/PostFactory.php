<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\User;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence;
        $description = $this->faker->realText(500);
        return [
            "title" => $title,
            "slug" => Str::slug($title),
            "description" =>$description,
            "excerpt" => Str::words($description, 50, " ...."),
            "category_id"=> Category::inRandomOrder()->first()->id,
            "user_id" => User::inRandomOrder()->first()->id,
        ];
    }
}
