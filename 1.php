<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>High Achievers school</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" type="text/css" href="animate.css">
	<link href="http://fonts.googleapis.com/css?family=Dancing+Script:700|EB+Garamond" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="custom.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<nav class="nav navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-brand name bounceInLeft animated">High Achievers school</div>
				<ul class="navbar-right">
					<a href="#contact" class="col-md-4 col-sm-4">ContactUs</a>
					<a href="#dedication" class="col-md-4 col-sm-4">Dedication</a>
					<a href="#register" class="col-md-4 col-sm-4">Register</a>
				</ul>
			</div>
		</nav>
		<div class="row">
			<div id="head">
				<h1>High Achievers</h1>
			</div>
		</div>
		<div class="row">
			<div class="jumbotron col-sm-3 col-md-4">
				<h4>Our Mission</h4>
				<img src="css/hat.png" height="150px" width="200px;">
				<p>To build raise children that are capable of critical thinking for the good of our economy as a country</p>
			</div>
			<div class="jumbotron col-sm-3 col-md-4">
				<h4>Our Vision</h4>
				<img src="css/2.jpg" height="150px" width="200px;">
				<p>The complete understanding of the universe.</p>
			</div>
			<div class="jumbotron col-sm-3 col-md-4">
				<h4>Our Motto</h4>
				<img src="css/diploma.png" height="150px" width="200px;">
				<p>Patience Hardwork and Determination</p>
			</div>
		</div>
		<br>
		<div class="container-fluid ded">
			<div id="dedication">
				<legend><h2>Dedication</h2></legend>
				<div class="col-sm-5 col-md-5">
					<img src="css/people.jpg" width="100%">
				</div>
				<div class="col-md-5 col-sm-5 text-center mk">
					We dedicate our work for the benefit of all children out there who are our future
				</div>
			</div>
		</div>
		<br>
		<div id="register">
			<h3>Register</h3>
			<form class="form form-group" method="POST" action="mavo.php">
				First Name<input type="text" name="n1" required="" class="form-control">
				<br><br>
				Second Name<input type="text" name="n2" class="form-control">
				<br><br>
				Date of birth<input type="date" name="bod" class="form-control">
				<br><br>
				Phone Number <span class="fa fa-phone"></span><input type="number" name="" required="" class="form-control">
				<br><br>
				E-mail<input type="email" name="" class="form-control">
				<br><br>
				Password<input type="password" name="pswd" class="form-control">
				<br><br>
				<?php

				$pass=$_POST['pswd'];

				if (strlen($pass)<8) {
					echo "Too Short";
				}else{
					echo " ";
				}

				?>
				Confrm password<input type="password" name="pswd1" class="form-control"><br>

				<?php

				$cfm= $_POST['pswd1'];
				if ($cfm !=$pass ) {

					echo "Mismatch!";
				}else{
					echo " ";
				}

				?>
				<button type="submit" class="btn btn-success">Register</button>
			</form>
		</div>
	</div>
	<br><br><br><br>
	<div class="navbar navbar-static-bottom" style="background-color: #F4A460; color: white;" id="contact">
		<div class="row" style="width: 100%;">
            <div class="col-md-5">
              <h2 class="title font-bold" style="color: black;"><bold>Useful links</bold></h2>
              <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
              <p><a href="#!">Invite a Friend</a></p>
              <p><a href="#!">Help</a></p>
            </div>
            <div class="col-md-5">
              <h2 class="title font-bold" style="color: black;"><bold>Contact</bold></h2>
              <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
              <p><i class="fa fa-home mr-3"></i> Nairobi/Kenya</p>
              <p><i class="fa fa-envelope mr-3"></i> highachievers@gmail.com</p>
              <p><i class="fa fa-phone mr-3"></i> 0704486930</p>
              <p><i class="fa fa-print mr-3"></i> 0712345678</p>
            </div>
          </div>
		<div class="container-fluid">
			© 2018 Copyright: High Achievers
		</div>
	</div>
</body>
</html>