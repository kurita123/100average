<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->create([
            [
                'name'           =>'田中太郎',
                'email'          =>'tanaka@example.com',
                'password'       =>Hash::make('password'),
                'remenber_token' =>str_tandom(10),
            ],
            [
                'name'           =>'加藤勇気',
                'email'          =>'kato@example.com',
                'password'       =>Hash::make('password'),
                'remenber_token' =>str_tandom(10),
            ],
            [
                'name'           =>'佐々木小次郎',
                'email'          =>'sasaki@example.com',
                'password'       =>Hash::make('password'),
                'remenber_token' =>str_tandom(10),
            ],
            [
                'name'           =>'小野田雅史',
                'email'          =>'onoda@example.com',
                'password'       =>Hash::make('password'),
                'remenber_token' =>str_tandom(10),
            ],
        ]);
    }
}
