<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    public function definition()
    {
        return [
            'title' => collect($this->faker->words(5))->join(' '),
            'description' => htmlspecialchars($this->faker->randomHtml(2, 3)),
            'ends_at' => $this->faker->dateTimeBetween('now', '+3 days'),
            'status' => $this->faker->randomElement(['open', 'closed']),
            'tech_stack' => $this->faker->randomElements(['react', 'nodejs', 'javascript', 'vite', 'nextjs'], random_int(1, 5)),
            'created_by' => User::factory(),
        ];
    }
}

