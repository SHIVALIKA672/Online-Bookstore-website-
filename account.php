<?php
include("register.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>All Products - Onile Bookstore</title>
	<link rel="stylesheet"  href="style.css">

	<link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class = "header">
	<div class="container">
		<div class="navbar">
			<div class="logo">
			<a href="index.html"><img src="img1/mlogo-removebg.png" width="200px"></a>
			</div>
				<nav>
					<ul id="MenuItems">
						<li><a href="index.html">Home</a></li>
						<div class="dropdown">
							<button class="dropbtn">Geners
							  <i class="fa fa-caret-down"></i>
							</button>
							<div class="dropdown-content">
							  <a href="childern.html">CHILDREN</a>
							  <a href="author.html">AUTHOR</a>
							  <a href="biography.html">BIOGRAPHY</a>
							  <a href="series.html">SERIES</a>
							  <a href="younhadult.html">YOUNG ADULT</a>
							  <a href="novel.html">NOVEL & FICTION</a>
							</div>
						  </div>

						<li><a href="">Contacts</a></li>
						<li><a href="account.html">Account</a></li>
					</ul>

				</nav>
				<a href="cart.html"><img src="images/cart.png" width="30px" height="30px"></a>
				<img src="images/menu.png" class="menu-icon" onclick="menutoggle()" >

			</div>
		</div>

<div class="account-page">
		<div class="container">
				<div class = "row">
						<div class="col-2">
								<img src="images/logo4.png" width="100%">
						</div>
						<div class="col-2">
								<div class="form-container">
										<div class="form-btn">
												<span onclick="login()">Login</span>
												<span onclick="register()">Register</span>
												<hr id="Indicator">
										</div>
										<form id="LoginForm">
											 <input type="text" placeholder="Username" name="username" required>
											 <input type="password" placeholder="password" name="username" required>
											 <button type="submit" class="btn">Login</button>
											 <a href="">Forgot Password</a>
										</form>
										<form id="RegForm" >
											<input type="text" placeholder=" First Name" name="fname" required>
											<input type="text" placeholder=" Last Name" name="lname" required>
											 <input type="text" placeholder="Address" name="address" required>
											 <input type="number" placeholder=" Mobile No." name="mobile" required>
											 <input type="text" placeholder="Username" name="username" required>
											 <input type="pemail" placeholder="Email" name="email" required>
											 <input type="password" placeholder="Password" name ="password" required>
											 <button type="submit" class="btn" name="save">Registeration</button>
										</form>
								</div>
								</div>
						</div>
				</div>
		</div>
</div>




 <!-------footer-------->
 <div class="footer">
 	<div class="container">
 		<div class="row">
 			<div class="footer-col-1">
 				<h3>Download Our App </h3>
 				<p>Download App for Android and IOS mobile phones</p>
 				<div class="app-logo">
 					<img src="images/play-store.png">
 					<img src="images/app-store.png">

 				</div>
 			</div>
 			<div class="footer-col-2">
 				<img src="img1/mlogo-removebg.png">
 				<p>Purpose of our store here</p>
 			</div>
 			<div class="footer-col-3">
 				<h3>Useful Links</h3>
 				<ul>
 					<li>Coupons</li>
 					<li>Blog Post</li>
 					<li>Return Policy</li>
 					<li>Join Affiliate</li>
 				</ul>
 			</div>
 			<div class="footer-col-4">
 				<h3>Follow us</h3>
 				<ul>
 					<li>Facebook</li>
 					<li>Twitter</li>
 					<li>Instagram</li>

 				</ul>
 			</div>
 		</div>
 		<hr>
 		<p class="copyright">Copyright 2021 - Online Books</p>
 	</div>
 </div>

 <!---------js for toggle menu------->
 <script type="text/javascript">
 	var MenuItems = document.getElementById("MenuItems");

 	MenuItems.style.maxHeight = "0px";

 	function menutoggle() {

 		if(MenuItems.style.maxHeight = "0px")
 		{
 			MenuItems.style.maxHeight = "200px";
 		}
 		else
 		{
 			MenuItems.style.maxHeight = "0px";

 		}
 		// body...
 	}
</script>
	 <!---------js for toggle form------->

<script>
var LoginForm = document.getElementById("LoginForm");
var RegForm = document.getElementById("RegForm");
var Indicator = document.getElementById("Indicator");
		function register(){
					RegForm.style.transform = "translateX(0px)";
					LoginForm.style.transform = "translateX(0px)";
					Indicator.style.transform = "translateX(100px)";
		}
		function login(){
					RegForm.style.transform = "translateX(300px)";
					LoginForm.style.transform = "translateX(300px)";
					Indicator.style.transform = "translateX(0px)";
		}
</script>

</body>
</html>

<?php

$fn = $_GET['fname'];
$ln = $_GET['lname'];
$ad = $_GET['address'];
$mo = $_GET['mobile'];
$us = $_GET['username'];
$em = $_GET['email'];
$ps = $_GET['password'];

$query="INSERT INTO register values('$fn','$ln','$ad','$mo','$us','$em','$ps')";
$data= mysqli_query($conn,$query);

?>
