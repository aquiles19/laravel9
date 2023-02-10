<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $array = [1, 2, 3, 4, 5,6,7,8,9,10];
        return [
            'user_id'=>  Arr::random($array),
            'title' => $title = $this->faker->sentence(),
            'slug'  =>  Str::slug($title),
            'body'  =>  $this->faker->text(2200)

        ];
    }
}
