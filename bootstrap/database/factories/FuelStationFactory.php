<?php

namespace Database\Factories;

use App\Models\HeadOffice;
use Carbon\Carbon;
use App\Models\Manager;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FuelStation>
 */
class FuelStationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'stock'=>fake()->numberBetween(0,200),
            'location'=>fake()->randomElement(['Colombo','Gampaha','Kalutara','Kandy','Galle']),
            'fuel_arrival_date'=>Carbon::now()->addDay(),
            'manager_id'=>Manager::factory(),
            'head_office_id'=>HeadOffice::factory()
        ];
    }
}
