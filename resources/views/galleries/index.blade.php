@extends('layouts.app')

@section('title', '| All Posts')

@section('main-content')

	<div class="row">
		<div class="col-md-10">
			<h1>All Galleries item</h1>
		</div>

		<div class="col-md-2">
			<a href="{{ route('galleries.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Create New</a>
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

					@foreach ($galleries as $gallery)

						<tr>
							<th>{{ $gallery->id }}</th>
							<td>{{ $gallery->title }}</td>
							<td>{{ substr(strip_tags($gallery->body), 0, 50) }}{{ strlen(strip_tags($gallery->body)) > 50 ? "..." : "" }}</td>
							<td><img src="{{ asset('images/'.$gallery->image)  }}" style="max-height:100px;max-width:100px;margin-top:10px;"></td>
							<td>{{ date('M j, Y', strtotime($gallery->created_at)) }}</td>
							<td><a href="{{ route('galleries.show', $gallery->id) }}" class="btn btn-default btn-sm">View</a> <a href="{{ route('galleries.edit', $gallery->id) }}" class="btn btn-default btn-sm">Edit</a></td>
						</tr>

					@endforeach

				</tbody>
			</table>

			<div class="text-center">
				{!! $galleries->links(); !!}
			</div>
		</div>
	</div>

@stop
