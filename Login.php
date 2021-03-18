<?php
include "header.php";
include('log.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: Location:http://localhost:8080/MobileShop/home.php"); // Redirecting To Profile Page
}
?>

<!---Login Screen Start-->
<div class="wrapper fadeInDown">
		<div id="formContent">
		  <!-- Tabs Titles -->
	  <h1>Login</h1>
		   
		  <!-- Login Form -->
		  <form action="log.php" method="post">
			<input type="text" id="Email_id" class="fadeIn second" name="Email_id" placeholder="Email-Id">
			<input type="password" id="Password" class="fadeIn third" name="Password" placeholder="password">
			<input type="submit" name="submit" class="fadeIn fourth" value="Log In">
			<span><?php echo $error; ?></span>
		  </form>
	  
		  <!-- Remind Passowrd -->
		  <div id="formFooter">
			<a class="underlineHover" href="#">Forgot Password?</a><br>
			Don't Have An Account? <a class="underlineHover" href="signup.html">Sign Up</a>
		</div>
			
		</div>
	  </div>

<!--End Login Screen-->

<!--Footer Start-->

<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<h3>Mobile Phones</h3>
						<ul>
							<li>OnePlus</li>
							<li>Redmi</li>
							<li>Oppo</li>
							<li>Vivo</li>
						</ul>
				</div>
				
					<div class="col-lg-6">
						<ul>
							<li>Products</li>
							<li>About Us</li>
						</ul>
					</div>
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

<script src="./assets/js/popper.min.js"></script>
	<script src="./assets/js/bootstrap.min.js"></script>
	<script src="./assets/js/owl.carousel.min.js"></script>
	<script src="./assets/js/isotope.pkgd-3.0.4.min.js"></script>
	<script src="./assets/js/masonry.pkgd.min-4.2.0.js"></script>
	<!--	<script src="./assets/js/jquery.mCustomScrollbar.concat.min.js"></script>-->
	<script src="./assets/js/main.js"></script>

</html>