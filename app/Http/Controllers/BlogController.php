<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function show(Post $post)
    {
    	// $post = Post::find($id);
    	return view('front.show',compact('post'));
    }
}
