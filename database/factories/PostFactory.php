<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
    public function definition(): array
    {
        // return [
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'title' => fake()->sentence(mt_rand(4, 8)),
        //     'slug' => fake()->slug(),
        //     'excerpt' => fake()->paragraph(),
        //     'body' => fake()->paragraphs()
        // ];
        return [
            'category_id' => mt_rand(1, 4),
            'user_id' => mt_rand(1, 10),
            'title' => $this->faker->sentence(mt_rand(4, 8)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            // 'body' => collect($this->faker->paragraphs(mt_rand(5, 10)))
            //     ->map(fn ($p) => "<p>$p</p>")
            'body' => '<p>' . implode('<p></p>', $this->faker->paragraphs(mt_rand(5, 10))) . '</p>'
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
