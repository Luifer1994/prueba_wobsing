<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RolesPermissionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'rol_id' => $this->faker->numberBetween(1,3),
            'permission_id' => $this->faker->unique()->numberBetween(1, 5),
        ];
    }
}
