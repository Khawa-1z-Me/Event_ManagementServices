<?php

namespace App\Models\Option;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cake extends Model
{
    public $table = "cake";
    protected $fillable = [
		'namecake', 'typecake','prices','updated_at','create_at','email'
	];
}

