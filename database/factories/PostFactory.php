<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
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
        $imageUrl = 'https://source.unsplash.com/random';
        // $imageUrl = 'data:image/jpeg;base64,' . base64_encode($imageData);
        // // Potong URL gambar jika terlalu panjang
        // $imageUrl = Str::limit($imageUrl, 255);

        return [
            'name' => $name = $this->faker->sentence(rand(2,7)),
            'slug' => Str::slug($name),
            'description' => $this->faker->paragraph(),
            'category_id' => rand(1,10),
            'author_id' => rand(1,10),
            'image' => $this->faker->imageUrl(),
        ];
    }
}
