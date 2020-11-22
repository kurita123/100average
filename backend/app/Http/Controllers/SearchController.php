<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = Post::query();
                            
        // if($request->has('search')){
        //     $query->where('comment','like','%'.$request->get('search').'%')->simplePaginate(9);
        //     $message = "「".$request->get('search')."」を含む検索が完了しました。";
        // }else{
        //     $message = "キーワードを入力して下さい。";
        // }
        // $result = $query->get();
        $search = $request->search;
        
        if (!empty($search)) {
            $query->where('comment', 'LIKE', "%{$search}%");
            $message = "「".$request->get('search')."」を含む検索が完了しました。";
            $result = $query->get();
            return view('search.search',compact('result','message'));
        }elseif(is_null($search)){
            $message = "キーワードを入力して下さい。";
            return view('search.search',compact('message'));
        }
        
        
        
        // if(!empty($result)){
        //     $message = "「".$search."」を含む検索が完了しました。";
        //     return view('search.search',compact('result','message'));
        // }else{
        //     $message = "「".$search."」を含む検索結果はありません。";
        //     return view('search.search',compact('result','message'));
        // }
    }
    
}
