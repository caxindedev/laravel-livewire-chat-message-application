<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->word(),
            'fotografia' => "https://i.pravatar.cc/150?img=".$this->faker->numberBetween(0, 10),
            'descricao' => $this->faker->paragraph(),
        ];
    }
}
