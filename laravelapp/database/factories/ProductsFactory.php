<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->sentence(),
            'description'=>$this->faker->realText($maxNbChars= 100),
            'price'=>$this->faker->numberBetween($min=100,$max=5000),
            'quantity'=>$this->faker->numberBetween($min=0,$max=99),
            'company'=>$this->faker->word(),
            'rates'=>$this->faker->numberBetween(0,5),
            'bonus'=>$this->faker->boolean(50),
            'discount'=>$this->faker->numberBetween(0,100),
            'category_id'=>$this->faker->numberBetween(1,5)
        ];
    }
}
