<?php

namespace App\Http\Controllers;

use App\Models\Rate;
use Illuminate\Support\Facades\Log;

class ExchangeRateController extends Controller
{
    public function index($date)
    {
        try {
            $currencies = Rate::with(['baseCurrency', 'targetCurrency'])
                ->where('effective_date', $date)
                ->get();

            return response()->json([
                'data' => $currencies,
                'message' => 'OK',
            ], 200);

        } catch (\Throwable $e) {
            Log::error('ExchangeRateController@index error: ' . $e->getMessage());

            return response()->json([
                'message' => 'Something went wrong.',
                'error' => app()->environment('production') ? null : $e->getMessage(),
            ], 500);
        }
    }
}
