<?php

namespace App\Models;

// use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;


        protected $fillable = [
            'nom',
            'email',
            'message',
        ];
        public function contacts() {
            return $this->hasMany(Contact::class);
        }
    }
