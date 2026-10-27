<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Variation extends Model
{
    protected $fillable = [
        'id_herb',
        'unit',
        'price',
        'image',
    ];

    protected $casts = [
        'price' => 'decimal:2',
    ];

    public function plantHerb(): BelongsTo
    {
        return $this->belongsTo(PlantHerb::class, 'id_herb');
    }
}