<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;
use Faker\Generator;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
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
        return [
            //
            'name' => fake()->name(),
            'logo' => $this->faker->image(public_path('images/Category_logo'),400,300, null, false) ,
            // 'created at'=>Carbon::now()->addHours(rand(24,120))->minutes(0)->seconds(0),
            // 'updated at'=>Carbon::now()->addHours(rand(24,120))->minutes(0)->seconds(0),
        ];
    }
}
