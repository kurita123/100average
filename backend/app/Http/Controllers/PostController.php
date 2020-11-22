<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PostRequest;
use App\Models\Post;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        return view('post.post');
    }

    public function complete(PostRequest $request)
    {
        //二重送信防止
        $request->session()->regenerateToken();
        //入力情報
        $user_id    = Auth::id();
        //画像保管
        $path       = $request->file('img')->store('public/img');
        $posts[]  = array();
        $posts    = new Post();
        //投稿内容保存
        $posts ->create ([
            'user_id' => $user_id,
            'name'    => $request->name,
            'comment' => $request->comment,
            'img'     => str_replace('public/img/','',$path),
        ]);
                                
        return view('post.complete');
    }
}
