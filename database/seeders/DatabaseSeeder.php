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
            'name' => 'Head Office',
            'email' => 'headoffice@powerfuel.com',
            'password' => ('secret'),
            'user_type' => 'head-office',
            'contact_no'=>fake()->phoneNumber()
        ]);

        User::factory()->create([
            'name' => 'Manager - Colombo',
            'email' => 'managerColombo@powerfuel.com',
            'password' => ('secret'),
            'user_type' => 'manager',
            'contact_no'=>fake()->phoneNumber()
        ]);

        User::factory()->create([
            'name' => 'Manager - Gampaha',
            'email' => 'managerGampaha@powerfuel.com',
            'password' => ('secret'),
            'user_type' => 'manager',
            'contact_no'=>fake()->phoneNumber()
        ]);

        User::factory()->create([
            'name' => 'Amal',
            'email' => 'amal@gmail.com',
            'password' => ('secret'),
            'user_type' => 'customer',
            'contact_no'=>fake()->phoneNumber()
        ]);

        Customer::factory(3)->create();

        Vehicle::factory(5)->create();

        Order::factory(2)->create();

    }
}
