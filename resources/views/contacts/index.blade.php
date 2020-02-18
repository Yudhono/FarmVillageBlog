@extends('layouts.app')

@section('title', '| All Posts')

@section('main-content')

	<div class="row">
		<div class="col-md-10">
			<h1>This is User Contacts</h1>
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
					<th>Name</th>
					<th>E-mail</th>
					<th>Phone Number</th>
					<th>Messages</th>
          <th>Posted At</th>
					<th></th>
				</thead>

				<tbody>

					@foreach ($contacts as $contact)

						<tr>
							<th>{{ $contact->id }}</th>
							<td>{{ $contact->name }}</td>
              <td>{{ $contact->e_mail }}</td>
              <td>{{ $contact->phone_number }}</td>
							<td>{{ substr(strip_tags($contact->body), 0, 50) }}{{ strlen(strip_tags($contact->body)) > 50 ? "..." : "" }}</td>
							<td>{{ date('M j, Y', strtotime($contact->created_at)) }}</td>
							<td><a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-default btn-sm">View</a> <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-default btn-sm">Edit</a></td>
						</tr>

					@endforeach

				</tbody>
			</table>

			<div class="text-center">
				{!! $contacts->links(); !!}
			</div>
		</div>
	</div>

@stop
