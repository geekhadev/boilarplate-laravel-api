<?php

namespace Database\Factories\Tracking;

use Illuminate\Database\Eloquent\Factories\Factory;

class DeviceFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
        ];
    }
}
