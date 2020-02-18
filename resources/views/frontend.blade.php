@extends('layouts.masterlayout')

@section('contents')
<div class="banner">
	<div id="content">
        <div id="slider">
			<img src="{{ asset('frontend/images/tim-mossholder-95235.jpg')}}" alt="We Bring" data-url="#1">
			<img src="{{ asset('frontend/images/dino-reichmuth-93777.jpg')}}" alt="The Good" data-url="#2">
			<img src="{{ asset('frontend/images/jake-gard-1344.jpg')}}" alt="Vegetable Farm" data-url="#3">
			<img src="{{ asset('frontend/images/karsten-wurth-206005.jpg')}}" alt="To Life" data-url="#4">
		</div>
	</div>
</div>
<div class="w3ls"></div>
<div class="content-section-a">
	<div class="container">
		<div class="row">
            <div class="col-lg-5 col-sm-6">
				<div class="content1">
					<h3 class="section-heading slideanim">{{$special_post1->title}}</h3>
					<hr class="section-heading-spacer slideanim">
					<div class="clearfix"></div>
					<p class="lead slideanim">{{ substr(strip_tags($special_post1->body), 0, 200) }}{{ strlen(strip_tags($special_post1->body)) > 200 ? "..." : "" }}</p>
				</div>
			</div>
            <div class="col-lg-5 col-lg-offset-2 col-sm-6 slideanim">
                <ul class="grid cs-style">
					<li>
						<figure>
							<img src="{{asset('/images/' . $special_post1->image)}}" alt="" class="img-responsive">
							<figcaption>
								<h3>{{$special_post1->title}}</h3>

								<a href="{{ url('special/'.$special_post1->id) }}">Read More</a>
							</figcaption>
						</figure>
					</li>
				</ul>
			</div>
        </div>
	</div>
</div>
<div class="w3ls"></div>
<div class="content-section-b">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-lg-offset-1 col-sm-push-6 col-sm-6">
				<div class="content2">
					<h3 class="section-heading slideanim">{{$special_post2->title}}</h3>
					<hr class="section-heading-spacer slideanim">
					<div class="clearfix"></div>
					<p class="lead slideanim">{{ substr(strip_tags($special_post2->body), 0, 200) }}{{ strlen(strip_tags($special_post2->body)) > 200 ? "..." : "" }}</p>
				</div>
			</div>
            <div class="col-lg-5 col-sm-pull-6 col-sm-6 slideanim">
                <ul class="grid cs-style">
					<li>
						<figure>
							<img src="{{asset('/images/' . $special_post2->image)}}" alt="" class="img-responsive">
							<figcaption>
								<h3>{{$special_post2->title}}</h3>

								<a href="{{ url('special/'.$special_post2->id) }}">Read More</a>
							</figcaption>
						</figure>
					</li>
				</ul>
            </div>
        </div>
	</div>
</div>
<div class="w3ls"></div>
<div class="content-section-a">
	<div class="container">
		<div class="row">
            <div class="col-lg-5 col-sm-6">
				<div class="content3">
					<h3 class="section-heading slideanim">{{$special_post3->title}}</h3>
					<hr class="section-heading-spacer slideanim">
					<div class="clearfix"></div>
					<p class="lead slideanim">{{ substr(strip_tags($special_post3->body), 0, 200) }}{{ strlen(strip_tags($special_post3->body)) > 200 ? "..." : "" }}</p>
				</div>
			</div>
            <div class="col-lg-5 col-lg-offset-2 col-sm-6 slideanim">
                <ul class="grid cs-style">
					<li>
						<figure>
							<img src="{{asset('/images/' . $special_post3->image)}}" alt="" class="img-responsive">
							<figcaption>
								<h3>{{$special_post3->title}}</h3>

								<a href="{{ url('special/'.$special_post3->id) }}">Read More</a>
							</figcaption>
						</figure>
					</li>
				</ul>
            </div>
        </div>
	</div>
</div>
<!-- /About -->
<!-- /Services -->
<section class="our-services" id="services">
    <h3 class="text-center slideanim">Our Services</h3>
	<ul class="ch-grid">

		@foreach($services as $service)
		<li>
			<div class="ch-item ch-img-1 slideanim">
				<div class="ch-info-wrap">
					<div class="ch-info">
						<div class="ch-info-front ch-img-1"><img src="{{asset('/images/' . $service->image)}}" class="img-responsive" alt=""></div>
						<div class="ch-info-back">
							<h5>{{$service->title}}</h5>
							<p>{{ substr(strip_tags($service->body), 0, 10) }}{{ strlen(strip_tags($service->body)) > 10 ? "..." : "" }}</p>
						</div>
					</div>
				</div>
			</div>
			<h4 class="slideanim">{{$service->title}}</h4>
			<p class="slideanim">{{ substr(strip_tags($service->body), 0, 10) }}{{ strlen(strip_tags($service->body)) > 10 ? "..." : "" }}</p>
			<a class="btn btn-lg btn-outline slideanim" href="{{ url('service/'.$service->id) }}" role="button">View details &raquo;</a>
		</li>
		@endforeach


	</ul>
</section>
<!-- /Services -->
<!-- Portfolio Grid Section -->
<section id="portfolio">
	<h3 class="text-center slideanim">Our Portfolio</h3>
    <div class="container">
        <div class="row">

					<?php
						$gallery_i = 0;
						foreach ( $galleries as $gallery ) {
					?>

					<div class="col-md-4 col-sm-6 col-xs-12 portfolio-item slideanim">
							<a href="#portfolioModal<?php echo $gallery_i; ?>" class="portfolio-link" data-toggle="modal">
								<div class="caption">
									<div class="caption-content">
										<i class="fa fa-paper-plane"></i>
									</div>
								</div>

								<img src="{{asset('/images/' . $gallery->image)}}" class="img-responsive" alt="">
							</a>
					</div>

					<?php
							//-- increment
							$gallery_i += 1;
						}
					?>

        </div>
    </div>
</section>
<!-- /Portfolio Grid Section -->
<!-- Portfolio Modals -->

<?php
	$gallery_i = 0;
	foreach ( $galleries as $gallery ) {
?>

<div class="portfolio-modal modal fade slideanim" id="portfolioModal<?php echo $gallery_i; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
			<div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h3>{{ $gallery->title }}</h3>
						<hr>
                        <img src="{{asset('/images/' . $gallery->image)}}" class="img-responsive img-centered" alt="">
                        <p>{!! $gallery->body !!}</p>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
		//-- increment
		$gallery_i += 1;
	}
?>

<!-- /Portfolio Modals -->
<!-- Blog -->
<section class="our-blog" id="blog">
	<h3 class="text-center slideanim">Our News Updates</h3>
    <div class="container">
		<div class="row">

			@foreach($posts as $post)
			<div class="col-md-3 col-xs-12">
				<div class="news-w3ls">
					<div class="view view-seventh slideanim">
						<img src="{{asset('/images/' . $post->image)}}" alt="" class="img-responsive" />
						<div class="mask">
							<h5>{{ date('M j, Y', strtotime($post->created_at)) }}</h5>
							<p>{{ substr(strip_tags($post->body), 0, 20) }}{{ strlen(strip_tags($post->body)) > 20 ? "..." : "" }}</p>
							<a href="{{ url('blog/'.$post->slug) }}" class="info">Read More</a>
						</div>
					</div>
				</div>
				<div class="blog-content slideanim">
					<p class="p1">News - {{ date('M j, Y', strtotime($post->created_at)) }}</p>
					<a href="{{ url('blog/'.$post->slug) }}"><h4>{{ $post->title }}</h4></a>
					<p class="p2">{{ substr(strip_tags($post->body), 0, 60) }}{{ strlen(strip_tags($post->body)) > 60 ? "..." : "" }}</p>
					<a href="{{ url('blog/'.$post->slug) }}">Read More</a>
				</div>
			</div>
			@endforeach

		</div>
	</div>
</section>
<!-- /Blog -->
@endsection
