@extends('layouts.app')

@section('title', '| All Posts')

@section('main-content')

	<div class="row">
		<div class="col-md-10">
			<h1>All Special News</h1>
		</div>

		<div class="col-md-2">
			<a href="{{ route('special_posts.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Create New</a>
		</div>
		<div class="col-md-12">
			<hr>
		</div>
	</div> <!-- end of .row -->

	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<th>#</th>
					<th>Title</th>
					<th>Body</th>
					<th>Image</th>
					<th>Created At</th>
					<th></th>
				</thead>

				<tbody>

					@foreach ($special_posts as $special_post)

						<tr>
							<th>{{ $special_post->id }}</th>
							<td>{{ $special_post->title }}</td>
							<td>{{ substr(strip_tags($special_post->body), 0, 50) }}{{ strlen(strip_tags($special_post->body)) > 50 ? "..." : "" }}</td>
							<td><img src="{{ asset('images/'.$special_post->image)  }}" style="max-height:100px;max-width:100px;margin-top:10px;"></td>
							<td>{{ date('M j, Y', strtotime($special_post->created_at)) }}</td>
							<td><a href="{{ route('special_posts.show', $special_post->id) }}" class="btn btn-default btn-sm">View</a> <a href="{{ route('special_posts.edit', $special_post->id) }}" class="btn btn-default btn-sm">Edit</a></td>
						</tr>

					@endforeach

				</tbody>
			</table>

			<div class="text-center">
				{!! $special_posts->links(); !!}
			</div>
		</div>
	</div>

@stop
