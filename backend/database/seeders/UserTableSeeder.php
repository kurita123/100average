<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'           =>'田中太郎',
            'email'          =>'tanaka@example.com',
            'password'       =>bcrypt('12345678'),
            'remember_token' =>str_random(10),
            'created_at'     => now(),
            'updated_at'     => now()
        ]);

        User::create([
            'name'           =>'加藤勇気',
            'email'          =>'kato@example.com',
            'password'       =>bcrypt('12345678'),
            'remember_token' =>str_random(10),
            'created_at'     => now(),
            'updated_at'     => now()
        ]);
        
        User::create([
            'name'           =>'佐々木小次郎',
            'email'          =>'sasaki@example.com',
            'password'       =>bcrypt('12345678'),
            'remember_token' =>str_random(10),
            'created_at'     => now(),
            'updated_at'     => now()
        ]);

        User::create([
            'name'           =>'小野田雅史',
            'email'          =>'onoda@example.com',
            'password'       =>bcrypt('12345678'),
            'remember_token' =>str_random(10),
            'created_at'     => now(),
            'updated_at'     => now()
        ]);
    }
}
