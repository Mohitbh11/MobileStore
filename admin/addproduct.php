<?php

include("db.php");
session_start();


if(isset($_POST['submit']))
{
$p_id=$_POST['pid'];
$Pcompany=$_POST['pcompany'];
$p_name=$_POST['pmodel'];
$price=$_POST['price'];
$color=$_POST['color'];
$ram=$_POST['ram'];
$memory=$_POST['memory'];
$details=$_POST['desc'];
//$image=$_POST['img'];
//picture coding
$picture_name=$_FILES['picture']['name'];
$picture_type=$_FILES['picture']['type'];
$picture_tmp_name=$_FILES['picture']['tmp_name'];
$picture_size=$_FILES['picture']['size'];

if($picture_type=="image/jpeg" || $picture_type=="image/jpg" || $picture_type=="image/png" || $picture_type=="image/gif")
{
	if($picture_size<=50000000)
	
		$pic_name=time()."_".$picture_name;
		move_uploaded_file($picture_tmp_name,"../product_images/".$pic_name);
		
mysqli_query($con,"insert into product (P_Id, Pcompany, Pmodel, Pprice, RAM, PColor, PImage, PMemory, Pdesc) values ('$p_id','$Pcompany','$p_name','$price','$ram','$color','$pic_name','$memory','$details')") or die ("query incorrect");

 header("location: sumit_form.php?success=1");
}
		
//mysqli_query($con,"insert into product (P_Id, Pcompany, Pmodel, Pprice, RAM, PColor, PImage, PMemory, Pdesc) values ('$p_id','$Pcompany','$p_name','$price','$ram','$color','$image','$memory','$details')") or die ("query incorrect");
//echo "Ho Gya";
//header("location: sumit_form.php?success=1");


mysqli_close($con);
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
				<a class="navbar-brand" href="home.html"><img src="./assets/img/logo.jpg" alt="" class="logo logo-bg"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
			</div>
			</div>
	
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
			
						<li class="nav-item">
							<a class="scrl-down nav-link" href="">Customer</a>
                        </li>
                        <li class="nav-item">
                            <a class="scrl-down nav-link" href="">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="scrl-down nav-link" href="">Stock</a>
                        </li>
                            
                        <li class="nav-item">
                            <a class="scrl-down nav-link" href="">Order</a>
                        </li>
						<li class="nav-item">
							<a class="scrl-down nav-link" href="">Admin</a>
						</li>

					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!--End Main Menu Logo-->

    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->
            <h1>Add Product</h1>
               
            <!-- AddProduct Form -->
            <form method="post">
                <input type="text" id="pid" class="fadeIn second" name="pid" placeholder="Product-Id">
                <select name="pcompany" id="pcompany" class="fadeIn second">
                    <option selected hidden value="">Select Company</option>
                    <option value="OnePlus">OnePlus</option>
                    <option value="Xiomi">Xiomi</option>
                </select>
                <input type="text" id="pmodel" class="fadeIn second" name="pmodel" placeholder="Model-Name">
                <input type="text" id="pprice" class="fadeIn third" name="price" placeholder="Price">
                <input type="text" id="color" class="fadeIn third" name="color" placeholder="Color">
                <select name="ram" id="ram">
                        <option selected hidden value="">Select RAM</option>
                        <option value="4gb">4GB</option>
                        <option value="6gb">6GB</option>
                        <option value="8gb">8GB</option>
                        <option value="10gb">10GB</option>
                </select>
                <select name="memory" id="memory">
                        <option selected hidden value="">Select Memory</option>
                        <option value="32gb">32GB</option>
                      <option value="64gb">64GB</option>
                        <option value="128gb">128GB</option>
                        <option value="256gb">256GB</option>
                </select>
                <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Description"></textarea>
                <input type="file" style="width:100%" name="picture" class="btn thumbnail" id="picture" >
                <input type="submit" name="submit" class="fadeIn fourth" value="submit">
                <input type="reset" name="submit" class="fadeIn fourth" value="reset">
            </form>
          
              
        </div>
    </div>



    <div class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Mobile Phones</h3>
                            <ul>
                                <li>OnePlus</li>
                                <li>Redmi</li>
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
        
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/isotope.pkgd-3.0.4.min.js"></script>
    <script src="../assets/js/masonry.pkgd.min-4.2.0.js"></script>
    <!--<script src="./assets/js/jquery.mCustomScrollbar.concat.min.js"></script>-->
    <script src="../assets/js/main.js"></script>
        
</html>