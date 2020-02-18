@extends('layouts.app')

@section('title', '| All Posts')

@section('main-content')

	<div class="row">
		<div class="col-md-10">
			<h1>Abouts</h1>
		</div>

		<div class="col-md-2">
			<a href="{{ route('abouts.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Create an About</a>
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

					@foreach ($abouts as $about)

						<tr>
							<th>{{ $about->id }}</th>
							<td>{{ $about->title }}</td>
							<td>{{ substr(strip_tags($about->body), 0, 50) }}{{ strlen(strip_tags($about->body)) > 50 ? "..." : "" }}</td>
							<td><img src="{{ asset('images/'.$about->image)  }}" style="max-height:100px;max-width:100px;margin-top:10px;"></td>
							<td>{{ date('M j, Y', strtotime($about->created_at)) }}</td>
							<td><a href="{{ route('abouts.show', $about->id) }}" class="btn btn-default btn-sm">View</a> <a href="{{ route('abouts.edit', $about->id) }}" class="btn btn-default btn-sm">Edit</a></td>
						</tr>

					@endforeach

				</tbody>
			</table>

			<div class="text-center">
				{!! $abouts->links(); !!}
			</div>
		</div>
	</div>

@stop
