@extends('layouts.layout_service_single')

@section('content')

<section class="galleryitem-w3ls">
	<div class="container">
		<h3 class="text-center slideanim">Our Service Information</h3>
		<p class="text-center slideanim">we provide you the best service in the world, check it here</p>
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1 centered slideanim">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					</ol>
					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
							<div class="hover01 column">
								<div>
									<figure><img src="{{ asset('frontend/images/port-item1.jpg')}}" alt="Vegetable Farm" title="Vegetable Farm"></figure>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="hover01 column">
								<div>
									<figure><img src="{{ asset('frontend/images/port-item2.jpg')}}" alt="Vegetable Farm" title="Vegetable Farm"></figure>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="hover01 column">
								<div>
									<figure><img src="{{ asset('frontend/images/port-item3.jpg')}}" alt="Vegetable Farm" title="Vegetable Farm"></figure>
								</div>
							</div>
						</div>
					</div>
				</div><!-- /Carousel -->
			</div>

			<div class="col-lg-5 col-lg-offset-1 slideanim">
				<div class="spacing"></div>
				<h4>{{ $service->title }}</h4>
				<p class="blog-p2">{!! $service->body !!}</p>

			</div>

			<div class="col-lg-4 col-lg-offset-1 slideanim">
				<div class="spacing"></div>
				<h4>Project Details</h4>
				<div class="hline"></div>
				<p class="gal-p1"><b>Date:</b> August 18, 2016</p>
				<p class="gal-p1"><b>Author:</b> John Doe</p>
				<p class="gal-p1"><b>Categories:</b> Illustration, Agriculture, Farming</p>
				<p class="gal-p1"><b>Tagged:</b> Irrigation, Cultivation, Horticulture</p>
				<p class="gal-p1"><b>Client:</b> Vegetable Farming Corp.</p>
				<p class="gal-p1"><b>Website:</b> <a href="#">http://example.com</a></p>
			</div>
		</div><!-- /row -->
	</div><!-- /container -->
</section>
@endsection
