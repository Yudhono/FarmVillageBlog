@extends('layouts.app')

@section('title', '| View Post')

@section('main-content')

	<div class="row">
		<div class="col-md-8">
			<h1>{{ $about->title }}</h1>

			<p class="lead">{!! $about->body !!}</p>

			<hr>

		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<label>Created At:</label>
					<p>{{ date('M j, Y h:ia', strtotime($about->created_at)) }}</p>
				</dl>

				<dl class="dl-horizontal">
					<label>Last Updated:</label>
					<p>{{ date('M j, Y h:ia', strtotime($about->updated_at)) }}</p>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('abouts.edit', 'Edit', array($about->id), array('class' => 'btn btn-primary btn-block')) !!}
					</div>
					<div class="col-sm-6">
						{!! Form::open(['route' => ['abouts.destroy', $about->id], 'method' => 'DELETE']) !!}

						{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

						{!! Form::close() !!}
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						{{ Html::linkRoute('abouts.index', '<< See All Posts', array(), ['class' => 'btn btn-default btn-block btn-h1-spacing']) }}
					</div>
				</div>

			</div>
		</div>
	</div>

@endsection
