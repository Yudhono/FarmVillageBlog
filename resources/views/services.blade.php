@extends('layouts.layout_service')

@section('content')
<!-- banner section -->
<div class="pogoSlider" id="js-main-slider">
	<div class="pogoSlider-slide" data-transition="barRevealDown" data-duration="1000"  style="background-image:url(/frontend/images/dong-zhang-155135.jpg);">
		<div class="pogoSlider-slide-element">
			<h3>Check Out Our Services</h3>
		</div>
	</div>
	<div class="pogoSlider-slide" data-transition="blocksReveal" data-duration="1000" style="background-image:url(/frontend/images/tim-mossholder-95235.jpg);">
		<div class="pogoSlider-slide-element">
			<h3>Check Out Our Services</h3>
		</div>
	</div>
	<div class="pogoSlider-slide" data-transition="barRevealDown" data-duration="1000" style="background-image:url(/frontend/images/karsten-wurth-206005.jpg);">
		<div class="pogoSlider-slide-element">
			<h3>Check Out Our Services</h3>
		</div>
	</div>
	<div class="pogoSlider-slide" data-transition="blocksReveal" data-duration="1000"  style="background-image:url(/frontend/images/cornelia-buchse-338.jpg);">
		<div class="pogoSlider-slide-element">
			<h3>Check Out Our Services</h3>
		</div>
	</div>
</div>
<!-- /banner section -->
<!-- blog content -->
<section class="blog-w3ls">
	<div class="container">
		<h3 class="text-center slideanim">This is Our Services</h3>
		<p class="text-center slideanim">we provide you the best service in the world, check it here</p>
		<div class="row">
			<!-- BLOG POSTS LIST -->
			<div class="col-lg-8 slideanim">
				<!-- Blog Post 1 -->
				@foreach($services as $service)

						<div class="post">
							<a href="#">
								<div class="hover01 column">
									<div>
										<figure><img src="{{asset('/images/' . $service->image)}}" class="img-responsive" height="auto" width="auto" /></figure>
									</div>
								</div>
							</a>

								<h3 class="ctitle">{{ $service->title }}</h3>
								<p class="blog-p1" style="margin-top: 6px"><small>Published: {{ date('M j, Y', strtotime($service->created_at)) }}</small></p>

								<p class="blog-p2" style="margin-top: 6px">{{ substr(strip_tags($service->body), 0, 300) }}{{ strlen(strip_tags($service->body)) > 300 ? "..." : "" }}</p>
								<p class="blog-p3"><a href="{{ url('service/'.$service->id) }}" class="btn-outline" style="margin-top: 6px">Read More</a></p>
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
					{!! $services->links() !!}
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
