<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AbilityRole>
 */
class AbilityRoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ability_id' => \App\Models\Ability::factory(),
            'role_id' => \App\Models\Role::factory(),
        ];
    }
}
