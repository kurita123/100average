<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    public function top(Request $request){
        
        

        return view('top');
    }
}
