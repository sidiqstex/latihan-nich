<?php

namespace Database\Factories;

use App\Models\ArticleCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category = ArticleCategory::inRandomOrder()->first();
        return [
            'title' => fake()->text(20),
            'description' => fake()->realText(100),
            'thumbnail' => fake()->imageUrl(640, 640),
            'category_id' => $category->id
        ];
    }
}
