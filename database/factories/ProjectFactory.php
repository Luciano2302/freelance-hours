<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
use App\Models\User;

class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tittle' => collect(fake()->words(5))->join(' '),
            'description' => fake()->randomHtml(),
            'ends_at'=>  fake()->dateTimeBetween('now', '+ 3 days'),
            'status' => fake()->randomElement(['open', 'closed']),
            'tech_stack' => fake()->randomElements(['nodejs', 'react', 'javascript', 'vite', 'nextjs'], random_int(1, 5)),
            'create_by'=> User::factory(),
        ];
    }
}
