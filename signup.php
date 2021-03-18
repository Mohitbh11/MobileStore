<?php
include "header.php";
?>
	<!--End Main Menu Logo-->



<div class="wrapper fadeInDown">
	<div id="formContent">
		<!-- Tabs Titles -->
	  
		<h1>Create New Account</h1>
		<!-- Login Form -->
		<form name="form"  method="post" action="sign.php">
			<input type="text" id="C_id" class="fadeIn second" name="C_id" placeholder="Customer ID" required>  
			<input type="password" id="Password" class="fadeIn third" name="Password" placeholder="New Password" required>
			<input type="text" id="Cname" class="fadeIn second" name="Cname" placeholder="Customer Name" required>
			<input type="text" id="Email_id" class="fadeIn third" name="Email_id" placeholder="Email Id" required>   
			<input type="text" id="Contactno" class="fadeIn third" name="Contactno" placeholder="Mobile No" required>
			<input type="text" id="Cadd" class="fadeIn third" name="Cadd" placeholder="Address" required>
			<br><strong>Security Question??</strong> 
			<select id="Que" name="Que" required>
			<option selected hidden value="" >Select Security Question??</option>
			<option value="birth">What Is Your Birth Place?</option>
			<option value="sport">What Is Your favourite Sport?</option>
			<option value="color">What Is Your favourite Color?</option>
			</select>
			<input type="text" id="Ans" class="fadeIn third" name="Ans" placeholder="Security Answer" required><br><br>
            <input type="submit" class="fadeIn fourth" name="create" value="Create Account">
            <input type="reset" class="fadeIn fourth" name="reset"  value="Reset">
		</form>
	  
		 
	  
	</div>
</div>

<!--End Login Screen-->
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