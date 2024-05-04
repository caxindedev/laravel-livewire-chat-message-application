<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Role>
 */
class RoleUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = AbilityRole::class;
    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'role_id' => \App\Models\Role::factory(),
        ];
    }
}
