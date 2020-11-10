<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Socialite;
use App\Models\User; //ユーザー情報テーブルEloquentモデル
use \File; //ファイル操作プラグイン
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Storage; 

class TwitterController extends Controller
{

    // ログイン
    public function redirectToProvider(){
        return Socialite::driver('twitter')->redirect();
    }

    // コールバック
    public function handleProviderCallback(){
        try {
            $twitterUser = Socialite::driver('twitter')->user();
        } catch (Exception $e) {
            return redirect('auth/twitter');
        }
        
        $user = User::where('auth_id', $twitterUser->id)->first();
        if (!$user) {
            $user = User::create([
                'auth_id' => $twitterUser->id
          ]);
        }
        Auth::login($user);
        return redirect('home');
    }

    // ログアウト
    public function logout(Request $request)
    {
        
        Auth::logout();
        return redirect('/');
    }
}
