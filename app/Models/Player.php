<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'main_position', 'market_value'];

    public function getFormattedMarketValueAttribute()
    {
        // Get the market value attribute
        $marketValue = $this->attributes['market_value'];

        // Format the market value presented in a user-friendly format
        return '£' . number_format($marketValue);
    }

}
