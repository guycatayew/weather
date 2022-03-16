<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Weather extends Model
{
    use HasFactory;

    protected $table = 'weather';
    protected $fillable = ['id', 'city_id', 'coordinates', 'weather', 'temperature', 'feel', 'humidity', 'wind'];

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }
}
