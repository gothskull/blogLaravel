<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use App;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
class AdminController extends Controller
{
   public function home()
   {
		return view('admin.pages.escritorio');
   }	
   public function index()
   {
      $posts = App\Post::all();//SE LE COLOCA APP\ PORQUE ES EL NAMESPACE DE POST EN LA RUTA app/Post

   	return view('admin.pages.listar',compact('posts'));
   }

   public function crear()
   {
      $tags       = App\Tag::all();
      $categorias = App\Categoria::all();

   	return view('admin.pages.crear',compact('categorias','tags'));
   }

   public function store(Request $request)   
   {
      // VAIDACIÓN
      $this->validate($request,[
         'title'    => 'required',
         'body'     => 'required',
         'category' => 'required',
         'excerpt'  => 'required',
         'tags'     => 'required',
      ]);

      // dd($request->get('tags'));
      // return App\Post::create($request->all());
      // dd($request->has('published_at'));
      $post = new Post;

      $post->title        = $request->get('title');
      $post->excerpt      = $request->get('excerpt');
      $post->url          = str_slug($request->get('url'));
      $post->body         = $request->get('body');
      $post->published_at = $request->has('published_at') ? Carbon::parse($request->get('published_at')) : null;
      $post->category_id  = $request->get('category');
      $post->save();

      $post->tags()->attach($request->get('tags'));

      return back()->with('flash', 'Tu publicación ha sido creada correctamente');

   }


}
