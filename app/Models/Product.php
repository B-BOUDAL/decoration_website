<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'image',
        'prix',
        'description',
        'category_id',
    ];
    // one to many
    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function carts() {
        return $this->belongsToMany(Cart::class);
    }
}
