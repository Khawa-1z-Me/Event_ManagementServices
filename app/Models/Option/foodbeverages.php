<?php

namespace App\Models\Option;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class foodbeverages extends Model
{
    
        public $table = "foodbeverages";
        protected $fillable = [
            'typesfood', 'Namefood','participant','description','prices','updated_at','create_at','email'
        ];
    
}
