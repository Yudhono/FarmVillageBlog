@extends('layouts.layout_Blogpost')
<?php $titleTag = htmlspecialchars($special_post->title); ?>
@section('title', "| $titleTag")

@section('content')

	<div class="col-lg-8 slideanim">

		<div class="hover01 column">
			<div>
				<figure><img src="{{asset('/images/' . $special_post->image)}}" class="img-responsive" width="auto" height="auto" /></figure>
			</div>
		</div>

			<h3 class="ctitle">{{ $special_post->title }}</h3>
			<p class="blog-p1"><small>Published: {{ date('M j, Y', strtotime($special_post->created_at)) }}</small></p>

			<p class="blog-p2">{!! $special_post->body !!}</p>
			<hr>
			<div class="spacing"></div>

			<h4>SHARE:</h4>
			<ul class="list-inline">
									<li>
											<a href="#" class="btn-social"><i class="fa fa-fw fa-facebook"></i></a>
									</li>
									<li>
											<a href="#" class="btn-social"><i class="fa fa-fw fa-google-plus"></i></a>
									</li>
									<li>
											<a href="#" class="btn-social"><i class="fa fa-fw fa-twitter"></i></a>
									</li>
									<li>
											<a href="#" class="btn-social"><i class="fa fa-fw fa-linkedin"></i></a>
									</li>
									<li>
											<a href="#" class="btn-social"><i class="fa fa-fw fa-dribbble"></i></a>
									</li>
							</ul>
</div>
@include('layouts.sidebar_blog')

@endsection
