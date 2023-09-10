<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

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
    // protected $model = Category::class;

    public function definition()
    {
        return [
            'name' => $name = $this->faker->sentence(1),
            'slug' => Str::slug($name),
        ];
    }
}
