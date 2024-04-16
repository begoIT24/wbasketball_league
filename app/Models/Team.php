<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    static $rules = [
		'name' => 'required',
		'address' => 'required',
    ];
    
        
    protected $fillable = [
        'name', 'address', 'logo'
    ];

    
}
