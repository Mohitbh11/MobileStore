<?php

include("db.php");
error_reporting(0);
if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='delete')
{
$C_Id=$_GET['C_Id'];
///////picture delete/////////
$result=mysqli_query($con,"select Email_id from customer where C_Id='$C_Id'")
or die("query is incorrect...");


/*this is delet query*/
mysqli_query($con,"delete from customer where C_Id='$C_Id'")or die("query is incorrect...");
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
	<title>Customer</title>
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
    <div class="formContent">
	<h1>Customer List <?php echo $page;?> </h1></div><br>
<table class="table  table-hover table-striped" style="font-size:18px">
<tr><th>C_Id</th>
<th>Customer Name</th>
<th>Email_id</th>
<th>Contactno</th>
<th>Address</th>
<?php 

$result=mysqli_query($con,"select C_Id, Cname, Email_id, Contactno, Cadd from customer Limit $page1,10")or die ("query 1 incorrect.....");

while(list($C_Id, $Cname, $Email_id, $Contactno, $Cadd)=mysqli_fetch_array($result))
{
echo "<tr><td>$C_Id</td><td>$Cname</td><td>$Email_id</td><td>$Contactno</td><td>$Cadd</td>
<td><a class='btn btn-success' href='customer.php?C_Id=$C_Id&action=delete'>Delete</a>
</td></tr>";
}

?>
</table>
</div></div>

<nav align="center">
  

<?php 
//counting paging

$paging=mysqli_query($con,"select C_Id,Cname,Email_id,Contactno, Cadd from customer");
$count=mysqli_num_rows($paging);

$a=$count/10;
$a=ceil($a);
echo "<bt>";echo "<bt>";
for($b=1; $b<=$a;$b++)
{
?> 
<ul class="pagination" style="border:groove #666">
<li><a class="label-info" href="customer.php?page=<?php echo $b;?>"><?php echo $b." ";?></a></li></ul>
<?php	
}
?>
</nav>
</div></div>
<?php include("include/js.php");?>

</body>

<script src="../assets/js/popper.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<script src="../assets/js/owl.carousel.min.js"></script>
	<script src="../assets/js/isotope.pkgd-3.0.4.min.js"></script>
	<script src="../assets/js/masonry.pkgd.min-4.2.0.js"></script>
	<!--	<script src="../assets/js/jquery.mCustomScrollbar.concat.min.js"></script>-->
	<script src="../assets/js/main.js"></script>

</html>