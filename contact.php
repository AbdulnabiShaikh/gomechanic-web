<?php
	include ("connection.php");
	include ("functions.php");

		if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$name = $_POST['name'];
		$email = $_POST['email'];
		$website = $_POST['website'];
		$message = $_POST['message'];

		if(!empty($name) && !empty($email) && !is_numeric($name))
		{
			$query = "insert into contactform (id,name,email,website,message) values ('0','$name','$email','$website','$message')";

			mysqli_query($con, $query);

			header("Location: index.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Car Workshop | Contact</title>
		
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Titillium+Web:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>
		
		<div id="site-content">
			
			<header class="site-header">
				<div class="container">
					<a id="branding" href="index.php">
						<img src="images/logo.png" alt="Company Logo" class="logo">
						<h1 class="site-title">Company<span>name</span></h1>
					</a>

					<nav class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item"><a href="index.php">Home</a></li>
							<li class="menu-item"><a href="about.php">About</a></li>
							<li class="menu-item"><a href="signin.php">Get Mechanic</a></li>
							<li class="menu-item"><a href="services.php">Services</a></li>
							<li class="menu-item"><a href="gallery.php">Gallery</a></li>
							<li class="menu-item current-menu-item"><a href="contact.php">Contact</a></li>
							<li class="menu-item"><a href="signup.php">Sign up</a></li>
							<li class="menu-item"><a href="signin.php">Sign in</a></li>
						</ul>
					</nav>
					<nav class="mobile-navigation"></nav>
				</div>
			</header> <!-- .site-header -->

			<main class="main-content">
				
				<div class="fullwidth-block content">
					<div class="container">
						<h2 class="entry-title">Omnis iste natus error sit voluptatem doloremque laudantium totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi architecto</h2>

						<div class="row">
							<div class="col-md-5">
								<form action="#" method="POST" class="contact-form">
									<input type="text" name="name" id="name" placeholder="Name...">
									<input type="text" name="email" id="email" placeholder="Email...">
									<input type="text" name="website" id="website" placeholder="Website...">
									<textarea name="message" id="message" placeholder="Message..."></textarea>
									<div class="text-right">
										<input type="submit" value="Send message" style="margin-right:10pc;">
									</div>
								</form>
							</div>
							<div class="col-md-6 col-md-offset-1">
								<div class="map-container">
									<div class="map"></div>
									<address>
										<strong>Company Name INC.</strong>
										<a href="mailto:office@companyname.com">office@companyname.com</a> <br>
										<span>40 Sibley St, Detroit</span>
										<a href="tel:532930098891">(532) 930 098 891</a>
									</address>
								</div>
							</div>
						</div>
					</div>
				</div>

			</main> <!-- .main-content -->

			<footer class="site-footer">
				<div class="container">
					<div class="subscribe-form">
						<form action="#">
							<input type="text" placeholder="Enter your email to subscribe...">
							<button type="submit"><img src="images/icon-envelope-white.png" alt=""></button>
						</form>
					</div>
					<div class="social-links">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
					</div>
					<div class="copy">
						<p>Copyright 2014 Company name. Designed by Themeezy. All rights reserved.</p>
					</div>
				</div>
			</footer> <!-- .site-footer -->

		</div> <!-- #site-content -->

		

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>