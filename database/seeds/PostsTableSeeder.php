<?php

use Carbon\Carbon;
use App\Post;
use App\Categoria;
use App\Tag;

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Post::truncate();
    	Categoria::truncate();
    	Tag::truncate();

    	$tag = new Tag;
    	$tag->name= 'HTML';
    	$tag->save();

    	$tag = new Tag;
    	$tag->name= 'CSS3';
    	$tag->save();

    	$tag = new Tag;
    	$tag->name= 'lARAVEL';
    	$tag->save();

    	$tag = new Tag;
    	$tag->name= 'PHP';
    	$tag->save();


    	$cate = new Categoria;
    	$cate->name = "Programación de software";
    	$cate->save();

    	$cate =new Categoria;
    	$cate->name = "Diseño Gráfico";
    	$cate->save();

        $post =new Post;

        $post->title   = "Post en blog con seeder categoria 1";
        $post->excerpt = "excerpt del primer post";
        $post->body    = "Ornare cum sociis sed, mus vehicula! Fusce voluptatem doloremque magni vitae minim, repellendus laoreet, fuga? Per? Suspendisse recusandae. Vestibulum wisi euismod ex excepturi ducimus nibh quaerat expedita hic est autem, suscipit iste! Inceptos vitae quisque mauris maecenas dignissim, voluptatem ornare dapibus! Alias consectetuer habitasse pariatur laboriosam assumenda repudiandae delectus primis sed! Esse ullam, odit, hymenaeos, ultricies dolore, parturient fuga esse! Tenetur vestibulum,";
        $post->published_at = Carbon::now();
        $post->category_id = 1;
        $post->save();

         $post =new Post;
        $post->title   = "Post en blog con seeder categoria 1";
        $post->excerpt = "excerpt del primer post";
        $post->body    = "Ornare cum sociis sed, mus vehicula! Fusce voluptatem doloremque magni vitae minim, repellendus laoreet, fuga? Per? Suspendisse recusandae. Vestibulum wisi euismod ex excepturi ducimus nibh quaerat expedita hic est autem, suscipit iste! Inceptos vitae quisque mauris maecenas dignissim, voluptatem ornare dapibus! Alias consectetuer habitasse pariatur laboriosam assumenda repudiandae delectus primis sed! Esse ullam, odit, hymenaeos, ultricies dolore, parturient fuga esse! Tenetur vestibulum,";
        $post->published_at = Carbon::now();
        $post->category_id = 1;
        $post->save();

         $post =new Post;
        $post->title   = "Post en blog con seeder categoria 2";
        $post->excerpt = "excerpt del primer post";
        $post->body    = "Ornare cum sociis sed, mus vehicula! Fusce voluptatem doloremque magni vitae minim, repellendus laoreet, fuga? Per? Suspendisse recusandae. Vestibulum wisi euismod ex excepturi ducimus nibh quaerat expedita hic est autem, suscipit iste! Inceptos vitae quisque mauris maecenas dignissim, voluptatem ornare dapibus! Alias consectetuer habitasse pariatur laboriosam assumenda repudiandae delectus primis sed! Esse ullam, odit, hymenaeos, ultricies dolore, parturient fuga esse! Tenetur vestibulum,";
        $post->published_at = Carbon::now();
        $post->category_id = 2;
        $post->save();

         $post =new Post;
        $post->title   = "Post en blog con seeder categoria 2";
        $post->excerpt = "excerpt del primer post";
        $post->body    = "Ornare cum sociis sed, mus vehicula! Fusce voluptatem doloremque magni vitae minim, repellendus laoreet, fuga? Per? Suspendisse recusandae. Vestibulum wisi euismod ex excepturi ducimus nibh quaerat expedita hic est autem, suscipit iste! Inceptos vitae quisque mauris maecenas dignissim, voluptatem ornare dapibus! Alias consectetuer habitasse pariatur laboriosam assumenda repudiandae delectus primis sed! Esse ullam, odit, hymenaeos, ultricies dolore, parturient fuga esse! Tenetur vestibulum,";
        $post->published_at = Carbon::now();
        $post->category_id = 2;
        $post->save();


    }
}
