<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producthome extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'image',
        'prix',
        
    ];
    // one to many
    
}