<!DOCTYPE html>
<!--
	Shine by TEMPLATE STOCK
	templatestock.co @templatestock
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Shine - Responsive Template | Template Stock</title>

		
		<!-- WEB FONTS -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:100,300,100italic,400,300italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
		
		<!-- BOOTSTRAP -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- FONT AWESOME -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- CUSTOM STYLING -->
		<link href="css/styles.css" rel="stylesheet">
		<!-- PRELOADER -->	
		<link href="css/loader.css" rel="stylesheet">
			
	</head>
	
<body>
	<!-- PRELOADER -->
		<div id="loader-wrapper">
			<div id="loader"><div class="sk-spinner sk-spinner-cube-grid"><div class="sk-cube"></div><div class="sk-cube"></div><div class="sk-cube"></div><div class="sk-cube"></div><div class="sk-cube"></div><div class="sk-cube"></div><div class="sk-cube"></div><div class="sk-cube"></div><div class="sk-cube"></div></div></div>
		</div>
    @yield('header')
	<!-- HEADER -->
		
	<!-- HEADER ENDS -->
	
	<!-- ABOUT -->
		<section id="about">
			<div class="container">
				<div class="row text-center">
					<!-- Section 1 -->
					<div data-sr="enter top over 1s, wait 0.3s, move 24px, reset" class="col-md-4">
						<i class="fa fa-laptop"></i>
						<h3>Responsive Design</h3>
						<div class="colored-line-small-center"></div>
						<p>Lorem ipsum dolor sit amet, ed do eiusmod tempor incididunt ut labore et dolore magna.</p>
					</div>
					<!-- Section 2 -->
					<div data-sr="enter bottom over 1s, wait 0.3s, move 24px, reset" class="col-md-4 middle">
						<i class="fa fa-lightbulb-o"></i>
						<h3>Creative Design</h3>
						<div class="colored-line-small-center"></div>						
						<p>Lorem ipsum dolor sit amet, ed do eiusmod tempor incididunt ut labore et dolore magna.</p>						
					</div>
					<!-- Section 3 -->
					<div data-sr="enter top over 1s, wait 0.3s, move 24px, reset" class="col-md-4">
						<i class="fa fa-newspaper-o"></i>
						<h3>Mailchimp Ready</h3>
						<div class="colored-line-small-center"></div>
						<p>Lorem ipsum dolor sit amet, ed do eiusmod tempor incididunt ut labore et dolore magna.</p>						
					</div>
				</div>
			</div>			
		</section>
	<!-- ABOUT ENDS -->
	
	<!-- SUBSCRIBE -->
		<section id="subscribe">
			<div class="container">
				<i data-sr="ease-in over 1s, reset" class="fa fa-envelope icontop"></i>
				<div class="row text-center">
					<div class="col-md-8 col-md-offset-2">
						<h2 data-sr="enter top over 1s, wait 0.3s, move 24px, reset" class="white-text">Sign up to our Newsletter</h2>
						<h5 data-sr="enter bottom over 1s, wait 0.3s, move 24px, reset" class="white-text">Stay up2date with climb-up</h5>
						<!-- MAILCHIMP FORM -->
						<form id="mc_form" role="form">
							<input data-sr="enter top over 1s, wait 0.3s, move 24px, reset" type="email" class="form-control" id="mc-email" name="mc-email" placeholder="Your Email" />
							<button data-sr="enter bottom over 1s, wait 0.3s, move 24px, reset" type="submit" class="button-leweb">Submit</button>
							<label for="mc-email" class="mc-email"></label>
						</form>
						<!-- MAILCHIMP FORM ENDS -->
					</div>
				</div>
			</div>	
		</section>
	<!-- SUBSCRIBE ENDS -->
	
	<!-- CONTACT US -->
		<section id="contact">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-8 col-md-offset-2">
						<!-- CONTACT FORM -->
						<form method="post" action="">
							<p data-sr="enter top over 1s, wait 0.3s, move 24px, reset" class="contact-info text-center">Get in Contact. Fill up the form below. All fields are required.</p>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px, reset" class="form-group col-md-6">
								<input type="text" class="form-control" id="name" name="name" placeholder="Your Name" />
							</div>
							<div data-sr="enter right over 1s, wait 0.3s, move 24px, reset" class="form-group col-md-6">
								<input type="email" class="form-control" id="email" name="email" placeholder="Your Email" />
							</div>
							<div data-sr="enter bottom over 1s, wait 0.3s, move 24px, reset" class="form-group col-md-12">
								<input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" />
							</div>
							<div data-sr="enter bottom over 1s, wait 0.3s, move 24px, reset" class="form-group col-md-12">
								<textarea cols="60" rows="3" id="comment" name="comment" class="form-control" placeholder="Write your comment here..."></textarea>
							</div>
							<div data-sr="enter bottom over 1s, wait 0.3s, move 24px, reset" class="form-group col-sm-12 ">
								<button type="submit" class="button-leweb">Send Message</button>
							</div>
						</form>
									
						<!-- AFTER SENDING MESSAGE -->
						<div id="success" class="col-md-12 col-sm-12 text-center">
							<i class="fa fa-check-circle"></i>
							<strong>Message successfully sent</strong>
							<p>Thanks for contacting us. We will respond to you as soon as possible!</p>
						</div>									
						<!-- CONTACT FORM ENDS -->	
					</div>				
				</div>
			</div>
		</section>
	<!-- CONTACT ENDS -->
	
	<!-- FOOTER -->
    @yield('footer')
	<!-- FOOTER ENDS -->	

	
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		<!-- SMOOTH SCROLL -->
		<script src="js/smooth-scroll.min.js"></script>
		<!-- PARALLAX IMG -->
		<script src="js/jquery.parallax-1.1.3.js"></script>
		<!-- SCROLL REVEAL -->
		<script src="js/scrollReveal.min.js"></script>
		<!-- FUNCTIONS -->
		<script src="js/functions.js"></script>

</body>
</html>