
@extends('layouts.layout_gallery')

@section('content')
<!-- banner section -->
<div class="pogoSlider" id="js-main-slider">
	<div class="pogoSlider-slide" data-transition="barRevealDown" data-duration="1000"  style="background-image:url(/frontend/images/dong-zhang-155135.jpg);">
		<div class="pogoSlider-slide-element">
			<h3>View Our Gallery</h3>
		</div>
	</div>
	<div class="pogoSlider-slide" data-transition="blocksReveal" data-duration="1000" style="background-image:url(/frontend/images/tim-mossholder-95235.jpg);">
		<div class="pogoSlider-slide-element">
			<h3>View Our Gallery</h3>
		</div>
	</div>
	<div class="pogoSlider-slide" data-transition="barRevealDown" data-duration="1000" style="background-image:url(/frontend/images/karsten-wurth-206005.jpg);">
		<div class="pogoSlider-slide-element">
			<h3>View Our Gallery</h3>
		</div>
	</div>
	<div class="pogoSlider-slide" data-transition="blocksReveal" data-duration="1000"  style="background-image:url(/frontend/images/cornelia-buchse-338.jpg);">
		<div class="pogoSlider-slide-element">
			<h3>View Our Gallery</h3>
		</div>
	</div>
</div>
<!-- /banner section -->
<section class="gallery-w3ls">
	<h3 class="text-center slideanim">Our Gallery</h3>
	<p class="text-center slideanim">You can check our newest portfolio an all our photos in here</p>
	<div id="portfoliowrap">
		<div class="portfolio-centered">
			<div class="recentitems portfolio">
			@foreach ($galleries as $gallery)
				<div class="portfolio-item graphic-design">
					<div class="he-wrap tpl6 slideanim">
						<img src="{{asset('/images/' . $gallery->image)}}" class="img-responsive" height="auto" width="auto" />
						<div class="he-view">
							<div class="bg a0" data-animate="fadeIn">
								<h3 class="a1" data-animate="fadeInDown">Click To Know More</h3>
								<a href="#0" class="dmbutton a2" data-animate="fadeInUp" data-darkbox="{{asset('/images/' . $gallery->image)}}"
            data-darkbox-description="<b>Vegetable Farm</b><br>Farming is fun"><i class="fa fa-search"></i></a>
								<a href="{{ url('gallery/'.$gallery->title) }}" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-link"></i></a>
							</div>
						</div>
					</div>
				</div>
			@endforeach
			</div>
		</div>
	</div>
</section>
@endsection
