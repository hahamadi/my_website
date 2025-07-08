
@section('header')
<header>
<div id="mainNavigation">
      <nav role="navigation">
        <div class="py-3 text-center border-bottom">
          <img src="/static_files/images/logos/logo_3_white_2.png" alt="" class="invert">
        </div>
      </nav>
      <div class="navbar-expand-md">
        <div class="text-center mt-3 collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav mx-auto ">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Book Hotel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Destinations</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Policy</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Company
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Blog</a></li>
                <li><a class="dropdown-item" href="#">About Us</a></li>
                <li><a class="dropdown-item" href="#">Contact us</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <section id="header">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-8">
						<img class="logo" src="images/logo.png" />
						<h1 class="white-text">Welcome Template Stock</h1>
						<h5 class="white-text">Lorem ipsum dolor sit amet, ed do eiusmod tempor incididunt.</h5>
						<div id="countdown" class="white-text"></div>
					</div>
				</div>
			</div>
			<div class="animation">
			<a class="arrow-down-animation" data-scroll href="#about"><i class="fa fa-angle-down"></i></a>
			</div>
		</section>
</header>
@endsection

@extends('frontend.master')

@section('footer')
<footer id="footer">
			<div class="container">
				<div class="row text-center">	
					<p>
						&copy; 2016 Shine | DESIGN BY <a href="http://templatestock.co">Template Stock</a>
						<span class="social">
							<a href="#"><i class="fa fa-facebook-square"></i></a>
							<a href="#"><i class="fa fa-twitter-square"></i></a> 
							<a href="#"><i class="fa fa-google-plus-square"></i></a>
						</span>
					</p>
				</div>
			</div>		
</footer>
@endsection