<?php

session_start();
$uname= $_GET['uname'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bookstore | Ecommerce Website Design</title>
	<link rel="stylesheet"  href="style.css">

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
					<li><a href="index1.php?uname=<?php echo $uname?>">Home</a></li>
					<div class="dropdown">
						<button class="dropbtn">Geners
						  <i class="fa fa-caret-down"></i>
						</button>
						<div class="dropdown-content">
						<a href="childern.php?uname=<?php echo $uname?>">CHILDREN</a>
 						 <a href="author.php?uname=<?php echo $uname?>">AUTHOR</a>
 						 <a href="biography.php?uname=<?php echo $uname?>">BIOGRAPHY</a>
 						 <a href="series.php?uname=<?php echo $uname?>">SERIES</a>
 						 <a href="younhadult.php?uname=<?php echo $uname?>">YOUNG ADULT</a>
 						 <a href="novel.php?uname=<?php echo $uname?>">NOVEL & FICTION</a>
						</div>
					  </div>
					<li><a href="contact.html">Contacts</a></li>
					<div class="dropdown">
						<button class="dropbtn">Account
						  <i class="fa fa-caret-down"></i>
						</button>
						<div class="dropdown-content">
						  <a href="logout.php">LOGOUT</a>

						  </div>
						  </div>
				</ul>

			</nav>
			<h6> <?php echo $uname; ?> </h6>
			<a href="cart3.php?uname=<?php echo $uname?>"><img src="images/cart-removebg-preview.png" width="40px" height="40px"></a>
			<img src="images/menu.png" class="menu-icon" onclick="menutoggle()" >
            </div>
            </div>
            </div>
            <div class="genres">
                <div class="small-container">

                    <h2 class="title">SERIES</h2>
                    <div class="row">
                        <div class="col-4"><a href="series01.php?uname=<?php echo $uname?>">
                            <img src="img1/img1/series01.jpg"></a>
                        </div>

                        <div class="col-4"><a href="series02.php?uname=<?php echo $uname?>">
                            <img src="img1/img1/series02.jpg"></a>
                        </div>

                        <div class="col-4"><a href="series03.php?uname=<?php echo $uname?>">
                            <img src="img1/img1/series03(2).jpg"></a>
                        </div>
                        <div class="col-4"><a href="series04.php?uname=<?php echo $uname?>">
                            <img src="img1/series04(2).jpg"></a>
                        </div>
                        <div class="col-4"><a href="series05.php?uname=<?php echo $uname?>">
                            <img src="img1/img1/series05.jpg"></a>
                        </div>
                        <div class="col-4"><a href="series06.php?uname=<?php echo $uname?>">
                            <img src="img1/img1/series06.jpg"></a>
                        </div>
                        <div class="col-4"><a href="series07.php?uname=<?php echo $uname?>">
                            <img src="img1/series07(2).jpg"></a>
                        </div>
                        <div class="col-4"><a href="series08.php?uname=<?php echo $uname?>">
                            <img src="img1/img1/series08.jpg"></a>
                        </div>
                        <div class="col-4"><a href="series09.php?uname=<?php echo $uname?>">
                            <img src="img1/series09(2).jpg"></a>
                        </div>
                        <div class="col-4"><a href="series10.php?uname=<?php echo $uname?>">
                            <img src="img1/img1/series10.jpg"></a>
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
                            <img src="images/logo3.png">
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
</body>
</html>
