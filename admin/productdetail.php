<?php

include("db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Smart Shop</title>
	<link rel="stylesheet" href="../assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/css/animate.css">
	<link rel="stylesheet" href="../assets/css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/normalize.css">
	<link rel="stylesheet" href="../style.css">
	<link rel="stylesheet" href="../assets/css/responsive.css">
	<link rel="icon" href="../assets/img/logo.jpg">
	<script src="../assets/js/jquery-1.12.4.min.js"></script>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">

	<div id="top"></div>
	<a href="#top" class="scrl-down" id="myBtn" title="Go to top"><i class="fa fa-angle-up fa-2x " aria-hidden="true"></i></a>
	
	<div class="menubar-area">
		<div class="container">
			<nav class="navbar navbar-expand-lg">
				<div class="milogo">
					<div class="milogo-wrapper">
				<a class="navbar-brand" href="home.html"><img src="../assets/img/logo.jpg" alt="" class="logo logo-bg"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
			</div>
			</div>
	
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
			
						<li class="nav-item">
							<a class="scrl-down nav-link" href="">Product</a>
						</li>
						<li class="nav-item">
							<a class="scrl-down nav-link" href="">About Us</a>
						</li>
						<li class="nav-item">
							<a class="scrl-down nav-link" href="Signup.html">Sign Up</a>
						</li>
						<li class="nav-item">
							<a class="scrl-down nav-link" href="Login.php">Login</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
<!--Header End-->
<!--Product Details Start-->

<div class="row" style="height:700px; padding:20px 15px;">

    <div class="col-md-6">
        <?php
            $result=mysqli_query($con,"select PImage from product")or die ("query 1 incorrect.....");
            list($picture)=mysqli_fetch_array($result);
            echo "<img src='../assets/img/$picture' style='width:100%; height:100%; border:solid black'>";
        ?>
    </div>
    <div class="col-md-6">
		<div style="height:550px; padding:20px 15px;">
        <?php
            $result=mysqli_query($con,"select Pcompany,Pmodel,PColor,RAM,PMemory,Pprice,Pdesc from product")or die ("query 1 incorrect.....");
            list($Pcompany,$Pmodel,$PColor,$RAM,$PMemory,$Pprice,$Pdesc)=mysqli_fetch_array($result);
            echo "<h2 style='color:black;'>",$Pcompany,$Pmodel,"(",$PColor,",",$RAM,",",$PMemory,")</h2>";
            echo "By:",$Pcompany;
            echo "<h3 style='color:black;'>Price:",$Pprice,"</h3>";
			echo "<hr>";
			echo "<h5 style='color:black;'>Color:",$PColor,"</h5>";
			echo "<h5 style='color:black;'>RAM:",$RAM,"</h5>";
			echo "<h5 style='color:black;'>PMemory:",$PMemory,"</h5><hr>";
			echo "<h4 style='color:black;'>Description<br></h4><ul><li style='color:black;'>",$Pdesc,"</li></ul><br><br>";
		?>
	</div>
	<div class="row" style="height:40px; padding:20px 15px;">
		<button>Buy Now</button>
		<button>Add to Cart</button>	
    </div>
	</div>
</div>


<!--Product Details End-->
<!--Footer Start-->

<div class="footer-area">
		<div class="container">
			<div class="row">

				</div>	
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center">
					<p class="copyright">
						Copyright© 2019 - All Rights Reserved
					</p>
					<div class="footer-social-links">
						<a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
						<a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
						<a href="https://github.com/"><i class="fa fa-github"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
<!--Footer End-->

</body>

<script src="../assets/js/popper.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<script src="../assets/js/owl.carousel.min.js"></script>
	<script src="../assets/js/isotope.pkgd-3.0.4.min.js"></script>
	<script src="../assets/js/masonry.pkgd.min-4.2.0.js"></script>
	<!--	<script src="../assets/js/jquery.mCustomScrollbar.concat.min.js"></script>-->
	<script src="../assets/js/main.js"></script>

</html>