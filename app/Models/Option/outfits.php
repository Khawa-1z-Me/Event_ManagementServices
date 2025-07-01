<?php

namespace App\Models\Option;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class outfits extends Model
{
    
        public $table = "outfits";
        protected $fillable = [
            'nameoutfit','typeofoutfit','size','colour','prices','updated_at','create_at','email'
        ];
    
}
