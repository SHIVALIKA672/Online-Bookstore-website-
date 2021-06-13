<?php
include 'config.php';
session_start();
$uname= $_SESSION['uname'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bookstore | Ecommerce Website Design</title>
	<link rel="stylesheet"  href="./style.css">

	<link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

    <div class="header">

		<div class="container">
			<div class = "navbar">
                <div class="logo">

					<i class="fa fa-book" aria-hidden="true" size="30px">SHELFTONS</i>
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

						<li><a href="contact.html">Contacts</a></li>
                        <div class="dropdown">
                            <button class="dropbtn">Account
                              <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-content">
                              <a href="login.php">LOGIN</a>
                              <a href="register.php">REGISTER</a>
                              </div>
                              </div>
				</ul>

			</nav>
			<img src="images/cart-removebg-preview.png" width="30px" height="30px">
			<img src="images/menu.png" class="menu-icon" onclick="menutoggle()" >

		</div>
    </div>
</div>
        <div class="testimonial">
            <div class="small-container">
                <div class="row">
                    <div class="col-3">
                        <i class="fa fa-quote-left"></i><p><b>SHELFTONS</b></p>
                        <div>
                            <p>DETAILS:</p>
                            <p><b>helpyou02@gmail.com</b></p>
                            <p><b>M NO.- 8767382839</b></p>

</div>



                 </div>

                 <div class="col-3">
                    <i class="fa fa-quote-left"></i><p><b>SHELFOTNS</b></p>
                    <div>
                        <p>DETAILS:</p>
                        <p><b>helpyou04@gmail.com</b></p>
                        <p><b>M NO.- 9867992928</b></p>

</div>


                 </div>

                 <div class="col-3">
                    <i class="fa fa-quote-left"></i><p><b>SHELFOTNS</b></p>
                    <div>
                        <p>DETAILS:</p>
                        <p><b>helpyou05@gmail.com</b></p>
                        <p><b>M NO.- 9867992928</b></p>

</div>


                 </div>



        </div>
        </div>
        </div>


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
                <p class="copyright">Copyright 2021 - Online Books Store</p>
            </div>
        </div>

                    </body>
                    </html>
