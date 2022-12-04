<?php

namespace Database\Factories;

use App\Models\FuelStation;
use Carbon\Carbon;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'scheduled_time'=>Carbon::now()->addDays(2),
            'status'=>'PENDING',
            'paid'=>false,
            'vehicle_id'=>Vehicle::factory(),
            'fuel_station_id'=>FuelStation::factory()
        ];
    }
}
