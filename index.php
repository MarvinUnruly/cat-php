<!DOCTYPE html>
<html>
<head>
	<title>Grade</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Dancing+Script:700|EB+Garamond" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="form.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="custom.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
	body{
		background-image: radial-gradient(center, ellipse cover, #27364f 0%, #112 50%, #112 100%);
		background: -moz-radial-gradient(center, ellipse cover, #27364f 0%, #112 50%, #112 100%);
		background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, #27364f), color-stop(50%, #112), color-stop(100%, #112));
		background: -webkit-radial-gradient(center, ellipse cover, #27364f 0%, #112 50%, #112 100%);
		background: -o-radial-gradient(center, ellipse cover, #27364f 0%, #112 50%, #112 100%);
		background: -ms-radial-gradient(center, ellipse cover, #27364f 0%, #112 50%, #112 100%);
		color: white;
	}
	.mk{
		background-color: #ccc3e2;
	}
	#drum{
		color: white;
	}
	.gradehead{
		font-family: 'Dancing Script', cursive;
		font-weight: 700;
		line-height: 46px;
		font-size: 42px;
		margin: 0 0 23px 0;
		color: white;
	}
	.navbar-brand{
		font-family: 'Dancing Script', cursive; 
		font-weight: 700; 
		margin: 0 0 10px 0;
		line-height: 49px;
		margin: 0 0 23px 0;
		font-size: 42px;
		color: white;
	}
	.fa-home{
		color: white;
	}
</style>
</head>
<body>
	<div class="container">
		<nav class="nav navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-brand">High Achievers school
					<div class="nav navbar-right">
						<a href="1.php" class="fa fa-home"></a>
					</div>
				</div>
			</div>
		</nav>
		<div id="head">
			<h1>Welcome<?php
			$nom =$_POST['n1'];
			echo " ".$nom;
			?></h1>
			<div class="gradehead"><h2>Our grading system!</h2></div>
		</div>
		<div class=""></div>
		<form class="form form-group" id="drum">
			<b>Please fill in the spaces that are applicable to you!!</b><br>
			Mathematics:<input type="number" name="math" class="form-control mk"><br>
			English:<input type="number" name="enga" class="form-control mk"><br>
			Swahili:<input type="number" name="swa" class="form-control mk"><br>
			Chemistry:<input type="number" name="chem" class="form-control mk"><br>
			Physics:<input type="number" name="phyc" class="form-control mk"><br>
			Geography:<input type="number" name="geo" class="form-control mk"><br>
			Computer:<input type="number" name="comp" class="form-control mk"><br>
			Business:<input type="number" name="bizna" class="form-control mk"><br><br>
			<button type="reset" class="btn btn-danger" class="form-control mk">Reset</button>
			<button type="submit" class="btn btn-success" class="form-control mk">Calculate grade</button>
		</form>
		<?php
		$maths=$_GET['math'];
		$ngoso=$_GET['enga'];
		$kisw=$_GET['swa'];
		$chemia=$_GET['chem'];
		$phyzo=$_GET['phyc'];
		$geog=$_GET['geo'];
		$biz=$_GET['bizna'];
		$computer=$_GET['comp'];
		$total=($maths+$ngoso+$kisw+$chemia+$phyzo+$geog+$biz+$computer)/7;

		if ($total >=85) {
			echo "A";
		}elseif ($total >= 80) {
			echo "A-";
		}elseif ($total >=75) {
			echo "B+";
		}elseif ($total >= 70) {
			echo "B";
		}elseif ($total >=65) {
			echo "B-";
		}elseif ($total >=60) {
			echo "C+";
		}elseif ($total >=55) {
			echo "C";
		}elseif ($total >=50) {
			echo "C-";
		}elseif ($total >=45) {
			echo "D+";
		}elseif ($total >=40) {
			echo "D";
		}elseif ($total >=35) {
			echo "D-";
		}else{
			echo "E";
		}
		?>
	</div>
</body>
</html>