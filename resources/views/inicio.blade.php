@extends('front.template')

@section('blog')


	@foreach($posts as $post)
		<div class="content-wrap">
		    <header class="entry-header">
		        <div class="posted-date">
		            {{ $post->published_at->format('d/m/Y') }}
		        </div><!-- .posted-date -->

		        <h2 class="entry-title">{{ $post->title }}</h2>

		        <div class="tags-links">
		            @foreach($post->tags as $tag)
		            	<span><badge class="badge badge-primary"> # {{ $tag->name }} </badge> </span>
		            @endforeach
		        </div><!-- .tags-links -->
		    </header><!-- .entry-header -->

		    <figure class="featured-image">
		        <img src="frontTheme/images/1.jpg" alt="">
		    </figure><!-- .featured-image -->

		    <div class="entry-content">
		        <p>{{ $post->excerpt }} </p>
		    </div><!-- .entry-content -->

		    <footer class="entry-footer flex flex-column flex-lg-row justify-content-between align-content-start align-lg-items-center">
		        <ul class="post-share flex align-items-center order-3 order-lg-1">
		            <label>Share</label>
		            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
		            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
		            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
		            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
		            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
		        </ul><!-- .post-share -->

		        <a class="read-more order-2" href="#">Leer Más</a>

		        <div class="comments-count order-1 order-lg-3">
		            <a href="#">2 Comentarios</a>
		        </div><!-- .comments-count -->
		    </footer><!-- .entry-footer -->
		</div><!-- .content-wrap -->
	@endforeach

@stop