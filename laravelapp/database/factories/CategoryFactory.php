<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name=$this->faker->unique()->randomElement(['phone', 'pc' ,'watch','tablet','laptop','monitor']);
        return [
            'name'=>$name,
            'image_path'=>"images/sort-$name.png"
        ];
    }
}