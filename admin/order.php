<?php

include("db.php");
error_reporting(0);
if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='delete')
{
$O_Id=$_GET['O_Id'];

/*this is delet query*/
mysqli_query($con,"delete from order_table where O_Id='$O_Id'")or die("delete query is incorrect...");
} 

///pagination
$page=$_GET['page'];

if($page=="" || $page=="1")
{
$page1=0;	
}
else
{
$page1=($page*10)-10;	
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
	
<div class="wrapper fadeInDown">  
<h1>Orders <?php echo $page;?> </h1><br>
<div style="overflow-x:scroll;">

<table class="table  table-hover table-striped" style="font-size:18px">
<tr><th>Order Id</th><th>Customer Name</th><th>Contact</th><th>Products</th><th>Price</th><th>Quantity</th><th>Address</th></tr>
<?php 
$result=mysqli_query($con,"select O_Id,Cname,Contactno,Pmodel,Pprice,Oquantity,Cadd from order_table, product, Customer where order_table.P_Id=product.P_Id and order_table.C_Id=Customer.C_Id") or die ("query 1 incorrect.....");

while(list($O_Id,$Cname,$Contactno,$Pmodel,$Pprice,$Oquantity,$Cadd)=mysqli_fetch_array($result))
{	
echo "<tr><td>$O_Id</td><td>$Cname</td><td>$Contactno</td><td>$Pmodel<br></td><td>$Pprice</td><td>$Oquantity<br><td>$Cadd</td>

<td>
<a class= 'btn btn-success' href='order.php?O_Id=$O_Id&action=delete'>Delete</a>
</td></tr>";
}
?>
</table>
</div></div>
<nav align="center"> 
<?php 
//counting paging

$paging=mysqli_query($con,"select P_id,PImage, Pprice from product");
$count=mysqli_num_rows($paging);

$a=$count/5;
$a=ceil($a);
echo "<bt>";echo "<bt>";
for($b=1; $b<=$a;$b++)
{
?> 
<ul class="pagination " style="border:groove #666">
<li><a class="label-info" href="order.php?page=<?php echo $b;?>"><?php echo $b." ";?></a></li></ul>
<?php	
}
?>
</nav>
</div></div>
<?php include("include/js.php");?>
</body>
</html>