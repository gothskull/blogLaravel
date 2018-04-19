<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
    	
    	 $posts = App\Post::published()->get();
    	return view('inicio',compact('posts'));
    }
}
