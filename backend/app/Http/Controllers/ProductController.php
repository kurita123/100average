<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $id = $request->id;
        $user_id = $request->user_id;

        $product = DB::table('posts')->where('id',$id)->get();
        $user_name = DB::table('users')->where('id',$user_id)->get('name');
        
        return view('product.index',compact('product','user_name'));
    }
}
