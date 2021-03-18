<?php
include('log.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
  header("location: Location:http://localhost/mobilestore/admin/addproduct.php"); // Redirecting To Profile Page
}
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
	<link rel="stylesheet" href="./style.css">
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
				<a class="navbar-brand" href="home.php"><img src="../assets/img/logo.jpg" alt="" class="logo logo-bg"></a>
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
						

					</ul>
				</div>
			</nav>
		</div>
	</div>
<!---Login Screen Start-->
<div class="wrapper fadeInDown">
		<div id="formContent">
		  <!-- Tabs Titles -->
	  <h1>Admin Login</h1>
		   
		  <!-- Login Form -->
		  <form action="" method="post">
			<input type="text" id="Email_id" class="fadeIn second" name="Email_id" placeholder="Email-Id">
			<input type="password" id="Password" class="fadeIn third" name="Password" placeholder="password">
			<input type="submit" name="submit" id="submit" class="fadeIn fourth" value="Log In">
			<span><?php echo $error; ?></span>
		  </form>
	  
		  <!-- Remind Passowrd -->
		  <div id="formFooter">
            <a class="underlineHover" href="#">Forgot Password?</a><br><br>
            
            <div class=" footer-social-links">
						<a href="https://www.facebook.com/"><i class= "bg1 fa fa-facebook"></i></a>
						<a href="https://www.twitter.com/"><i class="bg2 fa fa-twitter"></i></a>
						<a href="https://google.com/"><i class="bg3 fa fa-google"></i></a>
				</div>
		</div>
			
		</div>
	  </div>

<!--End Login Screen-->

</body>

<script src="../assets/js/popper.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<script src="../assets/js/owl.carousel.min.js"></script>
	<script src="../assets/js/isotope.pkgd-3.0.4.min.js"></script>
	<script src="../assets/js/masonry.pkgd.min-4.2.0.js"></script>
	<!--	<script src="../assets/js/jquery.mCustomScrollbar.concat.min.js"></script>-->
	<script src="../assets/js/main.js"></script>

</html>