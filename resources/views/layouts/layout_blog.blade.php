

<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Vegetable Farm An Agriculture Category Flat bootstrap Responsive  Website Template | Blog :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Vegetable Farm Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- css links -->
<link href="{{ asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('frontend/css/typo.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('frontend/css/hoverex-all.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('frontend/css/inner.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('frontend/css/pogo-slider.min.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('frontend/css/caption-hover.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('frontend/css/circle-hover.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('frontend/css/slider.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('frontend/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- /css links -->
<!-- font files -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<!-- font files -->
<!-- js files  -->
<script src="{{ asset('frontend/js/SmoothScroll.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/modernizr.custom.js')}}"></script>
<!-- /js files -->
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Vegetable Farm</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">

          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/about') }}">About</a></li>
            <li class="active"><a href="{{ url('/blog') }}">News</a></li>
            <li><a href="{{ url('/gallery') }}">Gallery</a></li>
            <li><a href="{{ url('/service') }}">Services</a></li>
            <li><a href="{{ url('/contact') }}">Contact</a></li>
            <li><a href="{{ url('/login') }}">Login</a></li>
            <li><a href="{{ url('/register') }}">Register</a></li>
          </ul>

        </div><!--/.nav-collapse -->
      </div>
    </nav>
<!-- /Fixed navbar -->

<!--tempat konten-->
    @yield('content')
<!-- Footer -->
<footer class="text-center">
    <div class="footer-above">
        <div class="container">
            <div class="row">
                <div class="footer-col col-md-4">
                    <h4>Location</h4>
                    <p>Jl. Raya Tlogomas No.247 Malang, Jawa Timur<br>
                      Phone: +62 321 434 328 (Hunting)<br>
                      Fax: +62 331 461 434
                    </p>
                </div>
                <div class="footer-col col-md-4">
                    <h4>Around the Web</h4>
                    <ul class="list-inline">
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="footer-col col-md-4">
                    <h4>About Vegetable Farm</h4>
                    <p>Vegetable Farm is a company that engaged in agriculture, in this website you can know more about our company</p>
                </div>
            </div>
        </div>
	</div>
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>© 2016 Vegetable Farm. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">W3layouts</a></p>
                </div>
            </div>
        </div>
		<a href="#myPage" title="To Top">
			<span class="glyphicon glyphicon-chevron-up"></span>
		</a>
    </div>
</footer>
<!-- js files -->
<script src="{{ asset('frontend/js/jquery.min.js')}}"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('frontend/js/classie.js')}}"></script>
<script src="{{ asset('frontend/js/TweenMax.min.js')}}"></script>
<script src="{{ asset('frontend/js/index2.js')}}"></script>
<script src="{{ asset('frontend/js/jquery.pogo-slider.min.js')}}"></script>
<script src="{{ asset('frontend/js/main2.js')}}"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

  // Store hash
  var hash = this.hash;

  // Using jQuery's animate() method to add smooth page scroll
  // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
  $('html, body').animate({
    scrollTop: $(hash).offset().top
  }, 900, function(){

    // Add hash (#) to URL when done scrolling (default click behavior)
    window.location.hash = hash;
    });
  });
})
</script>
<script>
$(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("slide");
    }
  });
});
</script>

<script src="{{ asset('frontend/js/retina-1.1.0.js')}}"></script>
<script src="{{ asset('frontend/js/jquery.hoverex.min.js')}}"></script>
<!-- /js files -->
</body>
</html>
