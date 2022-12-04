<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Order;
use App\Models\Vehicle;
use App\Models\Customer;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@material.com',
            'password' => ('secret')
        ]);

        Customer::factory(3)->create();

        Vehicle::factory(5)->create();

        Order::factory(2)->create();

    }
}
