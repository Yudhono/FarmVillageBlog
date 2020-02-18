@extends('layouts.app')

@section('title', '| All Posts')

@section('main-content')

	<div class="row">
		<div class="col-md-10">
			<h1>This is the Service We Provide</h1>
		</div>

		<div class="col-md-2">
			<a href="{{ route('services.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Create New</a>
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

					@foreach ($services as $service)

						<tr>
							<th>{{ $service->id }}</th>
							<td>{{ $service->title }}</td>
							<td>{{ substr(strip_tags($service->body), 0, 50) }}{{ strlen(strip_tags($service->body)) > 50 ? "..." : "" }}</td>
							<td><img src="{{ asset('images/'.$service->image)  }}" style="max-height:100px;max-width:100px;margin-top:10px;"></td>
							<td>{{ date('M j, Y', strtotime($service->created_at)) }}</td>
							<td><a href="{{ route('services.show', $service->id) }}" class="btn btn-default btn-sm">View</a> <a href="{{ route('services.edit', $service->id) }}" class="btn btn-default btn-sm">Edit</a></td>
						</tr>

					@endforeach

				</tbody>
			</table>

			<div class="text-center">
				{!! $services->links(); !!}
			</div>
		</div>
	</div>

@stop
