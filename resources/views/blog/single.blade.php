@extends('layouts.layout_Blogpost')
<?php $titleTag = htmlspecialchars($post->title); ?>
@section('title', "| $titleTag")

@section('content')

	<div class="col-lg-8 slideanim">

		<div class="hover01 column">
			<div>
				<figure><img src="{{asset('/images/' . $post->image)}}" class="img-responsive" width="auto" height="auto" /></figure>
			</div>
		</div>

			<h3 class="ctitle">{{ $post->title }}</h3>
			<p class="blog-p1"><small>Published: {{ date('M j, Y', strtotime($post->created_at)) }}</small></p>

			<p class="blog-p2">{!! $post->body !!}</p>
			<hr>
			<p>Posted In: {{ $post->category->name }}</p>
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


	<!-- comment -->

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h3 class="comments-title"><span class="glyphicon glyphicon-comment"></span>  {{ $post->comments()->count() }} Comments</h3>
			@foreach($post->comments as $comment)
				<div class="comment">
					<div class="author-info">

						<img src="{{ "https://www.gravatar.com/avatar/" . md5(strtolower(trim($comment->email))) . "?s=50&d=monsterid" }}" class="author-image">
						<div class="author-name">
							<h4>{{ $comment->name }}</h4>
							<p class="author-time">{{ date('F nS, Y - g:iA' ,strtotime($comment->created_at)) }}</p>
						</div>

					</div>

					<div class="comment-content">
						{{ $comment->comment }}
					</div>

				</div>
			@endforeach
		</div>
	</div>

	<div class="row">
		<div id="comment-form" class="comment-w3ls" style="margin-top: 50px;">

			<div class="well">
			{{ Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST']) }}

				<div class="row">
					<div class="col-md-6">
						{{ Form::label('name', "Name:") }}
						{{ Form::text('name', null, ['class' => 'form-control']) }}
					</div>

					<div class="col-md-6">
						{{ Form::label('email', 'Email:') }}
						{{ Form::text('email', null, ['class' => 'form-control']) }}
					</div>

					<div class="col-md-12">
						{{ Form::label('comment', "Comment:") }}
						{{ Form::textarea('comment', null, ['class' => 'form-control', 'rows' => '5']) }}

						{{ Form::submit('Add Comment', ['class' => 'btn btn-success btn-block', 'style' => 'margin-top:15px;']) }}
					</div>
				</div>

			{{ Form::close() }}
		</div>

		</div>
	</div>
</div>
@include('layouts.sidebar_blog')

@endsection
