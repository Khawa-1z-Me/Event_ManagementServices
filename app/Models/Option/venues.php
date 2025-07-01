<?php

namespace App\Models\Option;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class venues extends Model
{
    
        public $table = "venues";
        protected $fillable = [
            'Typevenue','namevenue','address','description','prices','time','updated_at','create_at','email'
        ];
    
}
