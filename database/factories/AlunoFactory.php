<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Aluno>
 */
class AlunoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $empresaId = rand(0, 1) ? \App\Models\Empresa::factory() : null;
        return [
            'user_id' => \App\Models\User::factory(),
            'genero' => $this->faker->title(rand(0, 1) ?'male':'female') ,
            'telefone' => $this->faker->phoneNumber(),
            'whatsapp'=> $this->faker->phoneNumber(),
            'data_nascimento'=> $this->faker->date(),
            'empresa_id' => $empresaId,
        ];
    }
}
