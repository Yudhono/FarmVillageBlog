
@extends('layouts.layout_contacts')

@section('content')
<!-- Contact -->
<section class="contact-us" id="contact">
	<h3 class="text-center slideanim">Contact Us</h3>
	<p class="text-center slideanim">Is there any question, feel free to ask us in here, we will reply it</p>
	<div class="container">
		<div class="row">
            <div class="col-md-8 slideanim">
                  <iframe class="googlemaps" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d380510.6741687111!2d-88.01234121699822!3d41.83390417061058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1455598377120" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-md-4 slideanim">
				<h4>Our Contacts :</h4>
                <p><b>Phone</b> : +62 321 434 328</p>
                <p><b>Email</b> : <a href="mailto:name@example.com">farm@yahoo.com</a></p>
                <p><b>Address</b> : Jl. Raya Tlogomas No.247 Malang, Jawa Timur</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</section>
<section class="contact-form">
	<h3 class="text-center slideanim">Contact Form</h3>
	<p class="text-center slideanim">feel free to ask us, fill the blanks below</p>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 slideanim">
				{!! Form::open(array('route' => 'contact.store', 'data-parsley-validate' => '', 'files' => true)) !!}
					<div class="row">
						<div class="form-group col-lg-4">
							{{ Form::label('name', 'Name:') }}
							{{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
						</div>
						<div class="form-group col-lg-4">
							{{ Form::label('e_mail', 'E-Mail:') }}
							{{ Form::text('e_mail', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
						</div>
						<div class="form-group col-lg-4">
							{{ Form::label('phone_number', 'Phone Number:') }}
							{{ Form::text('phone_number', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
						</div>
						<div class="row">
							<div class="col-lg-12 slideanim">
								<div class="form-group col-lg-4">
									<div class="form-group">
                	<label for="title">Select State:</label>
                		<select name="state" class="form-control" style="width:340px">
                    	<option value="" class="form-control">--- Select State ---</option>
											@foreach ($states as $key => $value)
												<option value="{{ $key }}" class="form-control">{{ $value }}</option>
											@endforeach
                		</select>
            			</div>
								</div>
								<div class="form-group col-lg-4">
									<div class="form-group">
                		<label for="title">Select City:</label>
                		<select name="city" class="form-control" style="width:340px">


                		</select>
            			</div>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="form-group col-lg-12">
							{{ Form::label('body', "Message:") }}
							{{ Form::textarea('body', null, array('class' => 'form-control')) }}
						</div>
						<div class="form-group col-lg-12">
							{{ Form::submit('Submit', array('class' => 'btn btn-lg btn-outline', 'style' => 'margin-top: 20px;')) }}
						</div>
					</div>
					{!! Form::close() !!}
			</div>
		</div>
	</div>
</section>


<!-- /Contact -->
@endsection
