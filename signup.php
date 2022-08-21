<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$name = $_POST['name'];
		$number= $_POST['number'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$confirmpassword = $_POST['confirmpassword'];

		if(!empty($name) && !empty($password) && !is_numeric($name))
		{
			$query = "insert into user (id,name,email,contact,password,confirmpassword) values ('0','$name','$email','$contact','$password','$confirmpassword')";

			mysqli_query($con, $query);

			header("Location: signin.php");
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
 
<style>
.btn_go{
    margin-left: 8pc;
    margin-top: 3pc;
    height: 4pc;
    width: 10pc;
    border-radius: 12px;
    font-size: 2pc;
    font-family: ui-rounded;
}

.btn_go:hover{
    background-color: green;
    color: white;
}
    </style>

</head>
<body>

<link href="http://fonts.googleapis.com/css?family=Titillium+Web:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="style.css">
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
							<li class="menu-item"><a href="contact.php">Contact</a></li>
                            <li class="menu-item current-menu-item"><a href="signup.php">Sign up</a></li>
							<li class="menu-item "><a href="signin.php">Sign in</a></li>
						</ul>
					</nav>
					<nav class="mobile-navigation"></nav>
				</div>
			</header>


            <main class="main-content">
				
				<div class="fullwidth-block content">
					<div class="container">
						<h2 class="entry-title">Omnis iste natus error sit voluptatem doloremque laudantium totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi architecto</h2>

                        <div class="col-md-5">
								<form action="#" method="POST" class="contact-form">
									<input type="text" id="name" name="name" placeholder="Name...">
                                    <input type="number" name="contact" id="contact" name="contact" placeholder="Contact..." maxlength="10">
									<input type="email" id="email" name="email" placeholder="Email...">
									<input type="password" id="password" name="password" placeholder="Password..." maxlength="08">
									<input type="password" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password...">
									<div class="text-right">
                                        <button class="btn_go" type="submit" value="submit" name="submit" style="margin-right:10pc;">Sign UP</button>
									</div>
								</form>
							</div>
                    </div>
                </div>
            </main>
</body>
</html>