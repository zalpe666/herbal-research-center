<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlantHerb extends Model
{
    protected $table = 'plant_herbs';

    protected $fillable = [
        'name',
        'slug',
        'scientific_name',
        'image',
        'chemical_content',
        'benefits',
        'usage',
        'side_effects',
        'references',
    ];
    public function variations()
    {
        return $this->hasMany(Variation::class, 'id_herb');
    }
}
