<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Abraham\TwitterOAuth\TwitterOAuth;

class TwitterController extends Controller
{
    public function index(Request $request)
    {
        $consumerKey = 'ukSljIIkWRnYzkEAShT4VGIfL';
        $consumerSecret = '0nbR6QpfcFOe3VrzqRGqbbqzvX7NOqemf6UOd3cJjbFqNFXYbd';
        $accessToken = '1265241375047479297-0bgNykIXn92qTMdrOrIf9n8s6fKVqk';
        $accessTokenSecret = 'wzYfsMl0RJM2dmXImlvHYpMh3HbXkwRmRdKsi6pfOoUFD';
        $connect = new TwitterOAuth( $consumerKey,$consumerSecret,$accessToken,$accessTokenSecret );
        //ツイートを5件取得
        $tweets_params = ['q' => 'ダイソーおすすめ' ,'count' => '10','tweet_mode' => 'extended','include_entities'=>true];
        $result =$connect->get('search/tweets', $tweets_params)->statuses;
        
        if($result){
            
            foreach ($result as $statuses) {
                //ここで出力させたりDBに登録したりいろいろ・・・。
                $img = $statuses->entities->media[0]->media_url;
            }
        }
        
        return view('twitter', [
            "result" => $result
        ]);
    }
}
