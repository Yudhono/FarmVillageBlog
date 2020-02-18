@extends('layouts.layout_Blogpost')

@section('content')

<!-- BLOG CONTENT -->
<section class="blogpost-w3ls">
	<div class="container">
		<h3 class="text-center slideanim">More Info On Blog Post</h3>
		<p class="text-center slideanim">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
		<div class="row">
			<!-- SINGLE POST -->
			<div class="col-lg-8 slideanim">
				<!-- Blog Post 1 -->

					<div class="hover01 column">
						<div>
							<figure><img class="img-responsive" src="{{ asset('frontend/images/blog-img1.jpg')}}" alt="vegetable-farm"></figure>
						</div>
					</div>

				<a href="blogpost.html"><h3 class="ctitle">Vegetable Farm for all.</h3></a>
				<p class="blog-p1"><small>Posted: April 25, 2014.</small> | By: Admin - 3 Comments</p>
				<p class="blog-p2"><b>Lorem Ipsum</b> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>

				<h4>Why do we use it?</h4>

				<p class="blog-p2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
				<blockquote>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</blockquote>
				<p class="blog-p2">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
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
				 <!-- Comments Form -->
                <div class="comment-w3ls">
					         <div class="well">
						       <h4>Leave a Comment:</h4>
						        <form action="#" method="post">
							       <div class="form-group">
								      <textarea class="form-control" rows="3">Leave a Comment</textarea>
							       </div>
							      <button type="submit" class="btn-outline">Submit</button>
						       </form>
					        </div>
				         </div>
                <hr>
                <!-- Posted Comments -->
				<div class="comment-agile">
					<!-- Comment -->
					<div class="media">
						<a class="pull-left" href="#">
							<div class="hover01 column">
								<div>
									<figure><img class="media-object" src="{{ asset('frontend/images/comment-img1.jpg')}}" alt="vegetable-farm"></figure>
								</div>
							</div>
						</a>
						<div class="media-body">
							<h4 class="media-heading">Kate Winslet
								<small>August 25, 2016 at 9:30 PM</small>
							</h4>
							<p class="blogpost-p2">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
						</div>
					</div>

					<!-- Comment -->
					<div class="media">
						<a class="pull-left" href="#">
							<div class="hover01 column">
								<div>
									<figure><img class="media-object" src="{{ asset('frontend/images/comment-img2.jpg')}}" alt="vegetable-farm"></figure>
								</div>
							</div>
						</a>
						<div class="media-body">
							<h4 class="media-heading">Britney Spears
								<small>August 27, 2016 at 9:30 PM</small>
							</h4>
							<p class="blogpost-p2">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
							<!-- Nested Comment -->
							<div class="media">
								<a class="pull-left" href="#">
									<div class="hover01 column">
										<div>
											<figure><img class="media-object" src="{{ asset('frontend/images/comment-img3.jpg')}}" alt="vegetable-farm"></figure>
										</div>
									</div>
								</a>
								<div class="media-body">
									<h4 class="media-heading">Lady Gaga
										<small>August 30, 2016 at 9:30 PM</small>
									</h4>
									<p class="blogpost-p2">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
								</div>
							</div>
							<!-- End Nested Comment -->
						</div>
					</div>
				</div>

			</div><!-- /col-lg-8 -->
			@include('layouts.sidebar_blog')
		</div><!-- /row -->
	</div><!-- /container -->
</section>
@endsection
