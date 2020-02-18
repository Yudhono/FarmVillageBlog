@extends('layouts.layout_about')

@section('content')
<!-- banner section -->
<div class="pogoSlider" id="js-main-slider">
	<div class="pogoSlider-slide" data-transition="barRevealDown" data-duration="1000"  style="background-image:url(/frontend/images/dong-zhang-155135.jpg);">
		<div class="pogoSlider-slide-element">
			<h3>About Our Vegetable Farm</h3>
		</div>
	</div>
	<div class="pogoSlider-slide" data-transition="blocksReveal" data-duration="1000" style="background-image:url(/frontend/images/tim-mossholder-95235.jpg);">
		<div class="pogoSlider-slide-element">
			<h3>About Our Vegetable Farm</h3>
		</div>
	</div>
	<div class="pogoSlider-slide" data-transition="barRevealDown" data-duration="1000" style="background-image:url(/frontend/images/karsten-wurth-206005.jpg);">
		<div class="pogoSlider-slide-element">
			<h3>About Our Vegetable Farm</h3>
		</div>
	</div>
	<div class="pogoSlider-slide" data-transition="blocksReveal" data-duration="1000"  style="background-image:url(/frontend/images/cornelia-buchse-338.jpg);">
		<div class="pogoSlider-slide-element">
			<h3>About Our Vegetable Farm</h3>
		</div>
	</div>
</div>
<!-- /banner section -->
<section class="about-us" id="about">
	<h3 class="text-center slideanim">{{$about->title}}</h3>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 slideanim">
                <p>{!!$about->body!!}</p>
            </div>
        </div>
    </div>
</section>
<section class="team-w3ls">
	<div class="container">
		<div class="row centered">
			<h3 class="text-center slideanim">MEET OUR TEAM</h3>
			<p class="text-center slideanim">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 slideanim">
				<div class="he-wrap tpl6 slideanim">
					<img src="{{ asset('frontend/images/team1.jpg')}}" alt="Vegetable Farm" title="Vegetable Farm">
					<div class="he-view">
						<div class="bg a0" data-animate="fadeIn">
							<h3 class="a1" data-animate="fadeInDown">Contact Me:</h3>
							<a href="#" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-envelope"></i></a>
							<a href="#" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-twitter"></i></a>
						</div>
					</div>
				</div>
				<h4 class="slideanim">Elizabeth</h4>
				<p class="team-agile slideanim">CEO</p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 slideanim">
				<div class="he-wrap tpl6 slideanim">
					<img src="{{ asset('frontend/images/team2.jpg')}}" alt="Vegetable Farm" title="Vegetable Farm">
					<div class="he-view">
						<div class="bg a0" data-animate="fadeIn">
							<h3 class="a1" data-animate="fadeInDown">Contact Me:</h3>
							<a href="#" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-envelope"></i></a>
							<a href="#" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-twitter"></i></a>
						</div>
					</div>
				</div>
				<h4 class="slideanim">Max Payne</h4>
				<p class="team-agile slideanim">MANAGER</p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 slideanim">
				<div class="he-wrap tpl6 slideanim">
					<img src="{{ asset('frontend/images/team3.jpg')}}" alt="Vegetable Farm" title="Vegetable Farm">
					<div class="he-view">
						<div class="bg a0" data-animate="fadeIn">
							<h3 class="a1" data-animate="fadeInDown">Contact Me:</h3>
							<a href="#" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-envelope"></i></a>
							<a href="#" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-twitter"></i></a>
						</div>
					</div>
				</div>
				<h4 class="slideanim">Diana</h4>
				<p class="team-agile slideanim">DIRECTOR</p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 slideanim">
				<div class="he-wrap tpl6 slideanim">
					<img src="{{ asset('frontend/images/team4.jpg')}}" alt="Vegetable Farm" title="Vegetable Farm">
					<div class="he-view">
						<div class="bg a0" data-animate="fadeIn">
							<h3 class="a1" data-animate="fadeInDown">Contact Me:</h3>
							<a href="#" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-envelope"></i></a>
							<a href="#" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-twitter"></i></a>
						</div>
					</div>
				</div>
				<h4 class="slideanim">Rose</h4>
				<p class="team-agile slideanim">FOUNDER</p>
			</div>
		</div>
	</div>
</section>
<section class="testimonial">
	<h3 class="text-center slideanim">Our Customers Word</h3>
	<p class="text-center slideanim">This is our customer testimony</p>
	<div class="cd-testimonials-wrapper cd-container slideanim">
		<ul class="cd-testimonials">
			<li>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				<div class="cd-author">
					<img src="{{ asset('frontend/images/test-img1.jpg')}}" alt="Author image">
					<ul class="cd-author-info">
						<li>John Cena</li>
						<li>CEO, Company</li>
					</ul>
				</div>
			</li>
			<li>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus ea, perferendis error repudiandae numquam dolor fuga temporibus. Unde omnis, consequuntur.</p>
				<div class="cd-author">
					<img src="{{ asset('frontend/images/test-img2.jpg')}}" alt="Author image">
					<ul class="cd-author-info">
						<li>Mark</li>
						<li>Designer, Company</li>
					</ul>
				</div>
			</li>
			<li>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam totam nulla est, illo molestiae maxime officiis, quae ad, ipsum vitae deserunt molestias eius alias.</p>
				<div class="cd-author">
					<img src="{{ asset('frontend/images/test-img3.jpg')}}" alt="Author image">
					<ul class="cd-author-info">
						<li>Natasha</li>
						<li>CEO, Company</li>
					</ul>
				</div>
			</li>
		</ul> <!-- cd-testimonials -->
		<a href="#0" class="cd-see-all">Click For More</a>
	</div> <!-- cd-testimonials-wrapper -->
	<div class="cd-testimonials-all">
		<div class="cd-testimonials-all-wrapper">
			<ul>
				<li class="cd-testimonials-item">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit totam saepe iste maiores neque animi molestias nihil illum nisi temporibus.</p>
					<div class="cd-author">
						<img src="{{ asset('frontend/images/test-img1.jpg')}}" alt="Author image">
						<ul class="cd-author-info">
							<li>John Cena</li>
							<li>CEO, Company</li>
						</ul>
					</div> <!-- cd-author -->
				</li>
				<li class="cd-testimonials-item">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore nostrum nisi, doloremque error hic nam nemo doloribus porro impedit perferendis. Tempora, distinctio hic suscipit. At ullam eaque atque recusandae modi fugiat voluptatem laborum laboriosam rerum, consequatur reprehenderit omnis, enim pariatur nam, quidem, quas vel reiciendis aspernatur consequuntur. Commodi quasi enim, nisi alias fugit architecto, doloremque, eligendi quam autem exercitationem consectetur.</p>
					<div class="cd-author">
						<img src="{{ asset('frontend/images/test-img2.jpg')}}" alt="Author image">
						<ul class="cd-author-info">
							<li>Mark</li>
							<li>Designer, Company</li>
						</ul>
					</div> <!-- cd-author -->
				</li>
				<li class="cd-testimonials-item">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem quibusdam eveniet, molestiae laborum voluptatibus minima hic quasi accusamus ut facere, eius expedita, voluptatem? Repellat incidunt veniam quaerat, qui laboriosam dicta. Quidem ducimus laudantium dolorum enim qui at ipsum, a error.</p>
					<div class="cd-author">
						<img src="{{ asset('frontend/images/test-img3.jpg')}}" alt="Author image">
						<ul class="cd-author-info">
							<li>Natasha</li>
							<li>CEO, Company</li>
						</ul>
					</div> <!-- cd-author -->
				</li>
				<li class="cd-testimonials-item">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero voluptates officiis tempore quae officia! Beatae quia deleniti cum corporis eos perferendis libero reiciendis nemo iusto accusamus, debitis tempora voluptas praesentium repudiandae laboriosam excepturi laborum, nisi optio repellat explicabo, incidunt ex numquam. Ullam perferendis officiis harum doloribus quae corrupti minima quia, aliquam nostrum expedita pariatur maxime repellat, voluptas sunt unde, inventore.</p>
					<div class="cd-author">
						<img src="{{ asset('frontend/images/test-img4.jpg')}}" alt="Author image">
						<ul class="cd-author-info">
							<li>Elizabeth</li>
							<li>CEO, Company</li>
						</ul>
					</div> <!-- cd-author -->
				</li>
				<li class="cd-testimonials-item">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit totam saepe iste maiores neque animi molestias nihil illum nisi temporibus.</p>
					<div class="cd-author">
						<img src="{{ asset('frontend/images/test-img5.jpg')}}" alt="Author image">
						<ul class="cd-author-info">
							<li>Diana</li>
							<li>CEO, Company</li>
						</ul>
					</div> <!-- cd-author -->
				</li>
				<li class="cd-testimonials-item">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quia quas, quis illo adipisci voluptate ex harum iste commodi nulla dolor. Eius ratione quod ab!</p>
					<div class="cd-author">
						<img src="{{ asset('frontend/images/test-img6.jpg')}}" alt="Author image">
						<ul class="cd-author-info">
							<li>Britney Spears</li>
							<li>CEO, Company</li>
						</ul>
					</div> <!-- cd-author -->
				</li>
				<li class="cd-testimonials-item">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, dignissimos iure rem fugiat consequuntur officiis.</p>
					<div class="cd-author">
						<img src="{{ asset('frontend/images/test-img7.jpg')}}" alt="Author image">
						<ul class="cd-author-info">
							<li>Lady Gaga</li>
							<li>CEO, Company</li>
						</ul>
					</div> <!-- cd-author -->
				</li>
				<li class="cd-testimonials-item">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At temporibus tempora necessitatibus reiciendis provident deserunt maxime sit id. Dicta aut voluptatibus placeat quibusdam vel, dolore.</p>
					<div class="cd-author">
						<img src="{{ asset('frontend/images/test-img1.jpg')}}" alt="Author image">
						<ul class="cd-author-info">
							<li>Whitney</li>
							<li>CEO, Company</li>
						</ul>
					</div> <!-- cd-author -->
				</li>
				<li class="cd-testimonials-item">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis iusto sapiente, excepturi velit, beatae possimus est tenetur cumque fugit tempore dolore fugiat! Recusandae, vel suscipit? Perspiciatis non similique sint suscipit officia illo, accusamus dolorum, voluptate vitae quia ea amet optio magni voluptatem nemo, natus nihil.</p>
					<div class="cd-author">
						<img src="{{ asset('frontend/images/test-img2.jpg')}}" alt="Author image">
						<ul class="cd-author-info">
							<li>Kate Winslet</li>
							<li>CEO, Company</li>
						</ul>
					</div> <!-- cd-author -->
				</li>
				<li class="cd-testimonials-item">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor quasi officiis pariatur, fugit minus omnis animi ut assumenda quod commodi, ad a alias maxime unde suscipit magnam, voluptas laboriosam ipsam quibusdam quidem, dolorem deleniti id.</p>
					<div class="cd-author">
						<img src="{{ asset('frontend/images/test-img3.jpg')}}" alt="Author image">
						<ul class="cd-author-info">
							<li>Cindy Crawford</li>
							<li>CEO, Company</li>
						</ul>
					</div> <!-- cd-author -->
				</li>
				<li class="cd-testimonials-item">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At temporibus tempora necessitatibus reiciendis provident deserunt maxime sit id. Dicta aut voluptatibus placeat quibusdam vel, dolore.</p>
					<div class="cd-author">
						<img src="{{ asset('frontend/images/test-img4.jpg')}}" alt="Author image">
						<ul class="cd-author-info">
							<li>Megan Fox</li>
							<li>CEO, Company</li>
						</ul>
					</div> <!-- cd-author -->
				</li>
				<li class="cd-testimonials-item">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque tempore ipsam, eos suscipit nostrum molestias reprehenderit, rerum amet cum similique a, ipsum soluta delectus explicabo nihil repellat incidunt! Minima magni possimus mollitia deserunt facere, tempore earum modi, ea ipsa dicta temporibus suscipit quidem ut quibusdam vero voluptatibus nostrum excepturi explicabo nulla harum, molestiae alias. Ab, quidem rem fugit delectus quod.</p>
					<div class="cd-author">
						<img src="{{ asset('frontend/images/test-img5.jpg')}}" alt="Author image">
						<ul class="cd-author-info">
							<li>Monica Belucci</li>
							<li>CEO, Company</li>
						</ul>
					</div> <!-- cd-author -->
				</li>
			</ul>
		</div>	<!-- cd-testimonials-all-wrapper -->
		<a href="#0" class="close-btn">Close</a>
	</div> <!-- cd-testimonials-all -->
</section>
@endsection
