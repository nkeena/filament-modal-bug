<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         Product::factory(10)->has(
            Order::factory()
                ->count(2)
                ->for(Customer::factory())
         )->create();
    }
}
