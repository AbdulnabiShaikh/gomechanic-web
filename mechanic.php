<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Mechanic</title>
</head>
<body>
<style>
.btn_go{
    margin-left: 8pc;
    margin-top: 3pc;
    height: 3pc;
    width: 15pc;
    border-radius: 12px;
    font-size: 2pc;
    font-family: ui-rounded;
}

.btn_go:hover{
    background-color: green;
    color: white;
}
</style>

    <link href="http://fonts.googleapis.com/css?family=Titillium+Web:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="style.css">
        <header class="site-header">
				<div class="container">
					<a id="branding" href="user.php">
						<img src="images/logo.png" alt="Company Logo" class="logo">
						<h1 class="site-title">Company<span>name</span></h1>
					</a>

					<nav class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item"><a href="user.php">Home</a></li>
							<li class="menu-item"><a href="aboutuser.php">About</a></li>
							<li class="menu-item current-menu-item"><a href="mechanic.php">Get Mechanic</a></li>
							<li class="menu-item"><a href="servicesuser.php">Services</a></li>
							<li class="menu-item"><a href="galleryuser.php">Gallery</a></li>
							<li class="menu-item"><a href="contactuser.php">Contact</a></li>
                            <li class="menu-item"><a href="signinuser.php">Sign up</a></li>
							<li class="menu-item"><a href="signinuser.php">Sign in</a></li>
                            <li class="menu-item"><a href="logout.php">Log Out</a></li>
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
									<input type="text" name="name" id="name" placeholder="Name...">
									<input type="number" id="pincode" name="pincode" placeholder="Pin Code..." maxlength="6">
						
									<div class="text-right">
                                        <button class="btn_go" type="submit" value="submit" name="submit" style="margin-right:10pc;">Get Mechanic</button>
									</div>
								</form>
							</div>
                    </div>
                </div>
            </main>






<html>
    <head>
        <title> Display Image </title>
    </head>
</html>
    <Center>
        <form action="" method="POST" enctype="multipart/form-data">
            <table width="50%" border="1" cellpadding="5" cellspacing="5">
                <thead>
                    <tr>
                        <th>IMAGE</th>
                        <th>Name</th>
                        <th>Contact</th>
                    </tr>
                </thead>
                <?php
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,'go_mechanic');
                    if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$name = $_POST['name'];
		$pincode = $_POST['pincode'];

		if(!empty($name) && !empty($pincode) && !is_numeric($name))
		{

			$query = "select * from mechanic where pincode = '$pincode'";
            echo"Mechanics Available At Your Pincode are : ";
                        
        }
    }

                    $query_run = mysqli_query($connection,$query);

                    while($row = mysqli_fetch_array($query_run)){
                        ?>
                            
                            <tr>
                                <td><?php echo '<img src="data:image;base64,'.base64_encode($row['pic']).'" alt = "Image" style="width:200px; height: 200px; border-radius:20px;" >'; ?></td>
                                <td> <?php echo $row['name']; ?> </td>
                                <td><?php echo $row['contact']; ?></td>
                            </tr>
                        <?php
                    }
                ?>
            </table>
        </form>
    </Center>