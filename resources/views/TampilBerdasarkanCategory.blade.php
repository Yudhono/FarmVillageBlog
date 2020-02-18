@extends('layouts.layout_blog')

@section('content')
<!-- banner section -->
<div class="pogoSlider" id="js-main-slider">
	<div class="pogoSlider-slide" data-transition="barRevealDown" data-duration="1000"  style="background-image:url(/frontend/images/dong-zhang-155135.jpg);">
		<div class="pogoSlider-slide-element">
			<h3>Check Out Our News</h3>
		</div>
	</div>
	<div class="pogoSlider-slide" data-transition="blocksReveal" data-duration="1000" style="background-image:url(/frontend/images/tim-mossholder-95235.jpg);">
		<div class="pogoSlider-slide-element">
			<h3>Check Out Our News</h3>
		</div>
	</div>
	<div class="pogoSlider-slide" data-transition="barRevealDown" data-duration="1000" style="background-image:url(/frontend/images/karsten-wurth-206005.jpg);">
		<div class="pogoSlider-slide-element">
			<h3>Check Out Our News</h3>
		</div>
	</div>
	<div class="pogoSlider-slide" data-transition="blocksReveal" data-duration="1000"  style="background-image:url(/frontend/images/cornelia-buchse-338.jpg);">
		<div class="pogoSlider-slide-element">
			<h3>Check Out Our News</h3>
		</div>
	</div>
</div>
<!-- /banner section -->
<!-- blog content -->
<section class="blog-w3ls">
	<div class="container">
		<h3 class="text-center slideanim">News related to Category: {{$apel->name}}</h3>
		<p class="text-center slideanim">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
		<div class="row">
			<!-- BLOG POSTS LIST -->
			<div class="col-lg-8 slideanim">
				<!-- Blog Post 1 -->
				@foreach($kategoris as $kategori)

						<div class="post">
							<a href="#">
								<div class="hover01 column">
									<div>
										<figure><img src="{{asset('/images/' . $kategori->image)}}" class="img-responsive" height="auto" width="auto" /></figure>
									</div>
								</div>
							</a>

								<h3 class="ctitle">{{ $kategori->title }}</h3>
								<p class="blog-p1" style="margin-top: 6px"><small>Published: {{ date('M j, Y', strtotime($kategori->created_at)) }}</small></p>

								<p class="blog-p2" style="margin-top: 6px">{{ substr(strip_tags($kategori->body), 0, 300) }}{{ strlen(strip_tags($kategori->body)) > 300 ? "..." : "" }}</p>
								<p class="blog-p3"><a href="{{ url('blog/'.$kategori->slug) }}" class="btn-outline" style="margin-top: 6px">Read More</a></p>
						</div>

						<hr>

				@endforeach
			</div><!-- /col-lg-8 -->

			<!-- SIDEBAR -->
			@include('layouts.sidebar_blog')
		</div><!-- /row -->
	</div><!-- /container -->
	<div class="row">
		<div class="blog-p3">
			<div class="btn-outline">
				<div class="text-center">
					{!! $kategoris->links() !!}
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
