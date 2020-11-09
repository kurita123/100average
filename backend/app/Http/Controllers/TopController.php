<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class TopController extends Controller
{
    public function top(Request $request)
    {
        $post = DB::table('posts')->inRandomOrder()->take(9)->get();
        return view('top',compact('post'));
    }
}
