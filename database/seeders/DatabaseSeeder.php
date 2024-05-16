<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    DB::table('users')->insert([
        'nom'=>'lina',
        'email'=>'lina22@gmail.com',
        'password'=>'lina33',
        
    ]);  
    }
}
