<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plans = [
            [
                'name' => 'Basic',
                'stripe_plan_id' => 'prod_SCVr5QZUwS1Cyj',
                'stripe_price_id' => 'price_1RI6qDEC99epwF4Gc1Rmivw2',
                'price' => 99,
            ],
            [
                'name' => 'Standard',
                'stripe_plan_id' => 'prod_SCVtf2DY1ORijf',
                'stripe_price_id' => 'price_1RI6s4EC99epwF4GQzh9zgDB',
                'price' => 199,
            ],
            [
                'name' => 'Premium',
                'stripe_plan_id' => 'prod_SCVuNMw8coAa1e',
                'stripe_price_id' => 'price_1RI6sHEC99epwF4GLKBsv568',
                'price' => 499,
            ],
        ];

        foreach ($plans as $plan) {
            Plan::create($plan);
        }
    }
}
