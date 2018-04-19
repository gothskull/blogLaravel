@extends('front.template')
@section('banner')
	
	<div class="swiper-container hero-slider">
	    <div class="swiper-wrapper">
	        <div class="swiper-slide">
	            <div class="hero-content flex justify-content-center align-items-center flex-column">
	                <img src="/frontTheme/images/slider.jpg" alt="">
	            </div><!-- .hero-content -->
	        </div><!-- .swiper-slide -->

	        <div class="swiper-slide">
	            <div class="hero-content flex justify-content-center align-items-center flex-column">
	                <img src="/frontTheme/images/slider.jpg" alt="">
	            </div><!-- .hero-content -->
	        </div><!-- .swiper-slide -->

	        <div class="swiper-slide">
	            <div class="hero-content flex justify-content-center align-items-center flex-column">
	                <img src="/frontTheme/images/slider.jpg" alt="">
	            </div><!-- .hero-content -->
	        </div><!-- .swiper-slide -->
	    </div><!-- .swiper-wrapper -->

	    <!-- Add Pagination -->
	    <div class="swiper-pagination"></div>

	    <!-- Add Arrows -->
	    <div class="swiper-button-next flex justify-content-center align-items-center">
	        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27 44"><path d="M27,22L27,22L5,44l-2.1-2.1L22.8,22L2.9,2.1L5,0L27,22L27,22z"></path></svg></span>
	    </div>
	    <div class="swiper-button-prev flex justify-content-center align-items-center">
	        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27 44"><path d="M0,22L22,0l2.1,2.1L4.2,22l19.9,19.9L22,44L0,22L0,22L0,22z"></path></svg></span>
	    </div>
	</div><!-- .swiper-container -->

@stop

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

		        <a class="read-more order-2" href="blog/{{ $post->url}} ">Leer Más</a>

		        <div class="comments-count order-1 order-lg-3">
		            <a href="#">2 Comentarios</a>
		        </div><!-- .comments-count -->
		    </footer><!-- .entry-footer -->
		</div><!-- .content-wrap -->
	@endforeach

@stop