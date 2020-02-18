@extends('layouts.layout_galleryitem')

@section('content')
<section class="galleryitem-w3ls">
	<div class="container">
		<h3 class="text-center slideanim">Our Gallery Information</h3>
		<p class="text-center slideanim">You can check our newest portfolio an all our photos in here</p>
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1 centered slideanim">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<!--<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					</ol>-->
					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
							<div class="hover01 column">
								<div>
									<figure><img src="{{asset('/images/' . $gallery->image)}}" alt="Vegetable Farm" title="Vegetable Farm"></figure>
								</div>
							</div>
						</div>
					</div>
				</div><!-- /Carousel -->
			</div>

			<div class="col-lg-5 col-lg-offset-1 slideanim">
				<div class="spacing"></div>
				<h4>{{ $gallery->title }}</h4>
				<p class="blog-p2">{!! $gallery->body !!}</p>

			</div>

			<div class="col-lg-4 col-lg-offset-1 slideanim">
				<div class="spacing"></div>
				<h4>Project Details</h4>
				<div class="hline"></div>
				<p class="gal-p1"><b>Date:</b> {{ date('M j, Y', strtotime($gallery->created_at)) }}</p>
				<p class="gal-p1"><b>Categories:</b> Illustration, Agriculture, Farming</p>
				<p class="gal-p1"><b>Tagged:</b> Irrigation, Cultivation, Horticulture</p>
				<p class="gal-p1"><b>Client:</b> Vegetable Farming Corp.</p>
				<p class="gal-p1"><b>Website:</b> <a href="#">http://example.com</a></p>
			</div>
		</div><!-- /row -->
	</div><!-- /container -->
</section>
<!-- PORTFOLIO SECTION -->
<section class="item-w3ls">
	<div id="portfoliowrap">
		<div class="portfolio-centered">
			<h3 class="text-center slideanim">Related Images</h3>
			<p class="text-center slideanim">check all related images in this section</p>
			<div class="recentitems portfolio">
				@foreach($galleries as $gallery)
				<div class="portfolio-item graphic-design">
					<div class="he-wrap tpl6 slideanim">
						<img src="{{asset('/images/' . $gallery->image)}}" class="img-responsive" height="auto" width="auto" />
						<div class="he-view">
							<div class="bg a0" data-animate="fadeIn">
								<h3 class="a1" data-animate="fadeInDown">A Graphic Design Item</h3>
								<a href="#0" class="dmbutton a2" data-animate="fadeInUp" data-darkbox="{{asset('/images/' . $gallery->image)}}"
            data-darkbox-description="<b>Vegetable Farm</b><br>Lorem ipsum dolor sit amet"><i class="fa fa-search"></i></a>
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
