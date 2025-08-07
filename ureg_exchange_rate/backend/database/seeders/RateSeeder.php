<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rate;
use Carbon\Carbon;
use Faker\Factory as Faker;

class RateSeeder extends Seeder
{
    public function run(): void
    {
        $today = Carbon::now()->toDateString();
        $pastDate = '2023-07-01';

        $faker = Faker::create();

        $ratesToday = [];
        $ratesPast = [];

        foreach (range(6, 30) as $id) {
            $ratesToday[] = [
                'target_currency_id' => $id,
                'rate' => $faker->randomFloat(2, 0.8, 16000)
            ];

            $ratesPast[] = [
                'target_currency_id' => $id,
                'rate' => $faker->randomFloat(2, 0.8, 16000)
            ];
        }

        foreach ($ratesToday as $rate) {
            Rate::create([
                'base_currency_id' => 1,
                'target_currency_id' => $rate['target_currency_id'],
                'rate' => $rate['rate'],
                'effective_date' => $today,
            ]);
        }

        foreach ($ratesPast as $rate) {
            Rate::create([
                'base_currency_id' => 1,
                'target_currency_id' => $rate['target_currency_id'],
                'rate' => $rate['rate'],
                'effective_date' => $pastDate,
            ]);
        }
    }
}
