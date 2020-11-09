<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'user_id'        =>1,
            'name'           =>'メスティン',
            'comment'        =>'ダイソーにて発見！お買い得キャンプ用品です。',
            'img'            =>'mestyen.png',
            'created_at'     => now(),
            'updated_at'     => now()
        ]);

        Post::create([
            'user_id'        =>2,
            'name'           =>'ミニ加湿器',
            'comment'        =>'ダイソーでお手軽加湿器！近くで使うには十分。',
            'img'            =>'kasitu.png',
            'created_at'     => now(),
            'updated_at'     => now()
        ]);

        Post::create([
            'user_id'        =>3,
            'name'           =>'超圧縮タオル',
            'comment'        =>'ダイソーにて発見！外出先で何かを拭くのに便利。',
            'img'            =>'taoru.png',
            'created_at'     => now(),
            'updated_at'     => now()
        ]);

        Post::create([
            'user_id'        =>4,
            'name'           =>'ヘッドライト',
            'comment'        =>'ダイソーのヘッドライト。200円するけどすぐに使えてアウトドアに活躍！',
            'img'            =>'raito.png',
            'created_at'     => now(),
            'updated_at'     => now()
        ]);

        Post::create([
            'user_id'        =>1,
            'name'           =>'エッグタイマー',
            'comment'        =>'「エッグタイマー」は、半生・半熟・固ゆでの3つのタイプの玉子料理を、失敗することなくつくれるセリアの優れものアイテムです。',
            'img'            =>'egg.png',
            'created_at'     => now(),
            'updated_at'     => now()
        ]);

        Post::create([
            'user_id'        =>2,
            'name'           =>'すのこ',
            'comment'        =>'セリアのすのこはサイズ、40cm×25㎝・45cm×20㎝・33cm×37㎝の3種類が用意され、つくりたいものや使うものの大きさによって選ぶことができます。',
            'img'            =>'sunoko.png',
            'created_at'     => now(),
            'updated_at'     => now()
        ]);

        Post::create([
            'user_id'        =>3,
            'name'           =>'野菜フレッシュキーパー',
            'comment'        =>'野菜の鮮度を長持ちさせるセリアの優れもの便利グッズです。',
            'img'            =>'yasai.png',
            'created_at'     => now(),
            'updated_at'     => now()
        ]);

        Post::create([
            'user_id'        =>4,
            'name'           =>'ハンキングステンレススポンジトング',
            'comment'        =>'グラスや水筒、花瓶などの長くて洗いにくいものが簡単に洗える便利なグッズです。セリアからは、ロングとショートの2つの種類が発売されているので、洗う容器の大きさによって使い分けができます。',
            'img'            =>'suponnzi.png',
            'created_at'     => now(),
            'updated_at'     => now()
        ]);
    }
}
