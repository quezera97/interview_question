<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Currency;

class CurrencySeeder extends Seeder
{
    public function run(): void
    {
        $currencies = [
            ['id' => 6, 'code' => 'CAD', 'name' => 'Canadian Dollar'],
            ['id' => 7, 'code' => 'CHF', 'name' => 'Swiss Franc'],
            ['id' => 8, 'code' => 'CNY', 'name' => 'Chinese Yuan'],
            ['id' => 9, 'code' => 'SEK', 'name' => 'Swedish Krona'],
            ['id' => 10, 'code' => 'NZD', 'name' => 'New Zealand Dollar'],
            ['id' => 11, 'code' => 'SGD', 'name' => 'Singapore Dollar'],
            ['id' => 12, 'code' => 'HKD', 'name' => 'Hong Kong Dollar'],
            ['id' => 13, 'code' => 'INR', 'name' => 'Indian Rupee'],
            ['id' => 14, 'code' => 'KRW', 'name' => 'South Korean Won'],
            ['id' => 15, 'code' => 'MXN', 'name' => 'Mexican Peso'],
            ['id' => 16, 'code' => 'BRL', 'name' => 'Brazilian Real'],
            ['id' => 17, 'code' => 'ZAR', 'name' => 'South African Rand'],
            ['id' => 18, 'code' => 'THB', 'name' => 'Thai Baht'],
            ['id' => 19, 'code' => 'MYR', 'name' => 'Malaysian Ringgit'],
            ['id' => 20, 'code' => 'IDR', 'name' => 'Indonesian Rupiah'],
            ['id' => 21, 'code' => 'USD', 'name' => 'US Dollar'],
            ['id' => 22, 'code' => 'EUR', 'name' => 'Euro'],
            ['id' => 23, 'code' => 'GBP', 'name' => 'British Pound'],
            ['id' => 24, 'code' => 'JPY', 'name' => 'Japanese Yen'],
            ['id' => 25, 'code' => 'AUD', 'name' => 'Australian Dollar'],
            ['id' => 26, 'code' => 'PHP', 'name' => 'Philippine Peso'],
            ['id' => 27, 'code' => 'VND', 'name' => 'Vietnamese Dong'],
            ['id' => 28, 'code' => 'SAR', 'name' => 'Saudi Riyal'],
            ['id' => 29, 'code' => 'AED', 'name' => 'UAE Dirham'],
            ['id' => 30, 'code' => 'NOK', 'name' => 'Norwegian Krone'],
        ];

        foreach ($currencies as $currency) {
            Currency::updateOrCreate(['id' => $currency['id']], $currency);
        }
    }
}
