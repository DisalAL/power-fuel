<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Customer;
use Brick\Math\BigInteger;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>fake()->name(),
            'reg_no'=>fake()->lexify('car-????'),
            'quota'=>fake()->numberBetween(0,20),
            'user_id'=> User::factory()
        ];
    }
}
