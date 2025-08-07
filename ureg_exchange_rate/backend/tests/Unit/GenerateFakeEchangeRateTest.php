<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Faker\Factory as Faker;

class GenerateFakeEchangeRateTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_generate_fake_exchange_rate(): void
    {
        $faker = Faker::create();

        $rates = collect(range(1, 30))->map(function ($id) use ($faker) {
            return [
                'target_currency_id' => $id,
                'rate' => $faker->randomFloat(2, 0.8, 16000)
            ];
        });

        $this->assertCount(30, $rates);
    }
}
