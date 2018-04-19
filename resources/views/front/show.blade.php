 @extends('front.template')
 @section('blog')
 <div class="container single-page blog-page">
	        <div class="row">
	            <div class="col-12">
	                <div class="content-wrap">
	                    <header class="entry-header">
	                        <div class="posted-date">
	                           {{ $post->published_at->format('d M') }}
	                        </div><!-- .posted-date -->

	                        <h2 class="entry-title">{{ $post->title }}  </h2>
							<div class="categoria">{{ $post->category->name}}  </div>
	                        <div class="tags-links">
								@foreach($post->tags as $tag)
									<span>
									 	<badge class="badge badge-primary">
									 		{{ $tag->name}}
									 	</badge>
									 </span>
								@endforeach
	                        </div><!-- .tags-links -->
	                    </header><!-- .entry-header -->

	                    <figure class="featured-image">
	                        <img src="/frontTheme/images/blog-image.jpg" alt="">
	                    </figure><!-- .featured-image -->

	                    <div class="entry-content">
							{{ $post->body}}
	                    </div><!-- .entry-content -->

	                    <blockquote class="blockquote-text">
	                        <p>Nullam non nisi ut dolor pellentesque eleifend. Aliquam commodo vitae risus malesuada varius. Nulla ornare lacus eu elit sollicitudin varius. Nulla aliquet ornare massa id tempor. Sed luctus dui non turpis sodales, ac tristique risus consequat. Donec tincidunt mi a magna rhoncus dapibus. Integer ut lectus euismod</p>
	                    </blockquote><!-- .blockquote-text -->

	                    <div class="row">
	                        <div class="col-12 col-md-6">
	                            <figure class="blog-page-half-img">
	                                <img src="/frontTheme/images/blog-img-1.png" alt="">
	                            </figure><!-- .blog-page-half-img -->
	                        </div><!-- .col -->

	                        <div class="col-12 col-md-6">
	                            <figure class="blog-page-half-img">
	                                <img src="/frontTheme/images/blog-img-2.png" alt="">
	                            </figure><!-- .blog-page-half-img -->
	                        </div><!-- .col -->
	                    </div><!-- .row -->

	 @include('front.partials.blogScripts')
@stop