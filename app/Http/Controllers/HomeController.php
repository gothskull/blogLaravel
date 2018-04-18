<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class HomeController extends Controller
{
    public function home()
    {
    	$posts = App\Post::latest('published_at')->get();//SE LE COLOCA APP\ PORQUE ES EL NAMESPACE DE POST EN LA RUTA app/Post
    	return view('inicio',compact('posts'));
    }
}
