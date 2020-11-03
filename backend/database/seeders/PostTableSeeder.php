<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
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
                'user_id'        =>1,
                'name'           =>'メスティン',
                'comment'        =>'ダイソーにて発見！お買い得キャンプ用品です。',
                'img'            =>'mestyen.png',
            ],
            [
                'user_id'        =>2,
                'name'           =>'ミニ加湿器',
                'comment'        =>'ダイソーでお手軽加湿器！近くで使うには十分。',
                'img'            =>'kasitu.png',
            ],
            [
                'user_id'        =>3,
                'name'           =>'超圧縮タオル',
                'comment'        =>'ダイソーにて発見！外出先で何かを拭くのに便利。',
                'img'            =>'taoru.png',
            ],
            [
                'user_id'        =>4,
                'name'           =>'メスティン',
                'comment'        =>'ダイソーのヘッドライト。200円するけどすぐに使えてアウトドアに活躍！',
                'img'            =>'raito.png',
            ],
        ]);
    }
}
