<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Currency extends Model
{
    protected $fillable = [
        'code',
        'name',
    ];

    public function rates(): HasMany
    {
        return $this->hasMany(Rate::class, 'base_currency_id');
    }
}
