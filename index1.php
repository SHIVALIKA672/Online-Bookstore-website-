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
				<ul class="option" id="MenuItems">
					<li><a href="index.html">Home</a></li>
					<li><a href="./contact.html">Contact</a></li>
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
		<div class="row">
			<div class="col-2">
				<h1>Get your favourite books<br>At your doorsteps!</h1>
				<p>A Room without Books is like a Body without a Soul</p>
				<a href="" class="btn">Explore Now &#8594;</a>
			</div>
			<div class="col-2">
				<img src="images/logo4.png">

			</div>
		</div>
		</div>
</div>

<!--------featured genres-------------->
<div class="genres">
	<div class="small-container">
	   <h2 class="title">Featured Geners</h2>
	   <div class="row">
	   <div class="col-3">
		<a href="younhadult.php?uname=<?php echo $uname ?>">
		   <img src="img1/img1/logoya.png">
		<h3 class="title">YOUNG ADULT</a></h3>

		</div>
		<div class="col-3">
			<a href="biography.php?uname=<?php echo $uname ?>">
			<img src="img1/img1/logobio.png">
		<h3 class="title">BIOGRAPHIES</a></h3>
		</div>
		<div class="col-3">
			<a href="series.php?uname=<?php echo $uname ?>">
			<img src="img1/img1/logoseries2.png">
		<h3 class="title">SERIES</a></h3>
		</div>
		<div class="col-3">
			<a href="novel.php?uname=<?php echo $uname ?>">
			<img src="img1/img1/logonovel.png">
		<h3 class="title"> NOVEL & FICTION</a></h3>
		</div>
		<div class="col-3">
			<a href="childern.php?uname=<?php echo $uname ?>">
			<img src="img1/img1/logokids.png">
		<h3 class="title">CHILDREN</a></h3>
		</div>
		<div class="col-3">
			<a href="author.php?uname=<?php echo $uname ?>">
			<img src="img1/img1/logoauth.png">
		<h3 class="title">AUTHOR</a></h3>
		</div>
	</div>

		</div>
		</div>



	 	<h2 class="title">Best Seller</h2>
	 	<div class="row">
	 		<div class="col-4">
	 			<img src="img1/bs01.jpg">
	 			<h4>War & Peace</h4>
	 			<div class="rating">
	 				<i class="fa fa-star"></i>
	 				<i class="fa fa-star"></i>
	 				<i class="fa fa-star"></i>
	 				<i class="fa fa-star"></i>
	 				<i class="fa fa-star-o"></i>

	 			</div>
	 			<p>Rs.1157.00</p>
				 <a href="bestseller1.php?uname=<?php echo $uname ?>" class="btn">BUY NOW</a>
	 		</div>
	 		<div class="col-4">
	 			<img src="img1/bs02.jpg">
	 			<h4>The God of Small Things</h4>
	 			<div class="rating">
	 				<i class="fa fa-star"></i>
	 				<i class="fa fa-star"></i>
	 				<i class="fa fa-star"></i>
	 				<i class="fa fa-star-o"></i>
	 				<i class="fa fa-star-o"></i>

	 			</div>
	 			<p>Rs288.00</p>
				 <a href="bestseller2.php?uname=<?php echo $uname ?>" class="btn">BUY NOW</a>
	 		</div>
	 		<div class="col-4">
	 			<img src="img1/bs03.jpg">
	 			<h4>The code breaker</h4>
	 			<div class="rating">
	 				<i class="fa fa-star"></i>
	 				<i class="fa fa-star"></i>
	 				<i class="fa fa-star"></i>
	 				<i class="fa fa-star"></i>
	 				<i class="fa fa-star-half-o"></i>

	 			</div>
	 			<p>Rs690.00</p>
				 <a href="bestseller3.php?uname=<?php echo $uname ?>" class="btn">BUY NOW</a>
	 		</div>

	 		<div class="col-4">
	 			<img src="img1/bs04.jpg">
	 			<h4>Where the Crawdads Sing</h4>
	 			<div class="rating">
	 				<i class="fa fa-star"></i>
	 				<i class="fa fa-star"></i>
	 				<i class="fa fa-star"></i>
	 				<i class="fa fa-star"></i>
	 				<i class="fa fa-star-half-o"></i>

	 			</div>
	 			<p>$349.00</p>
				 <a href="bestseller4.php?uname=<?php echo $uname ?>" class="btn">BUY NOW</a>
	 		</div>

	 	</div>
	 </div>

	<!-------offer--------->
	<div class="offer">
		<div class="small-container">
			<div class="row">
				<div class="col-2">
					<img src="img1/exclusive.jpg" class="offer-img" width="70%">
			</div>
			<div class="col-2">
				<p style=font-size:40px>E-BOOK FEATURE AVAILABLE</p>
				<br>
				<p>Exclusively Available at our store</p>
				<h1>The Fountainhead</h1>
				<small>The novel's protagonist, Howard Roark, is an intransigent young architect, who battles against conventional standards and refuses to compromise with an architectural establishment unwilling to accept innovation.</small>
				<br>
				<a href="https://drive.google.com/file/d/1Nnrox3V9aoUECw4s0UdT501DGXNTbFRl/view?usp=sharing" class="btn">Read Now &#8594;</a>
			</div>
		</div>
	</div>

	<!------testimonial------>
	<div class="testimonial">
		<div class="small-container">
			<div class="row">
				<div class="col-3">
					<i class="fa fa-quote-left"></i><p>Shelftons is a blessing... especially in times of covid..and quarantine, when all the bookstores are closed shelftons provides you a wide range of books at a very reasonable price.</p>
					<div class="rating">
		 				<i class="fa fa-star"></i>
		 				<i class="fa fa-star"></i>
		 				<i class="fa fa-star"></i>
		 				<i class="fa fa-star"></i>
		 				<i class="fa fa-star-o"></i>

	 			</div>
	 			 <img src="img1/mlogo-removebg.png" class="test-img">

				</div>
				<div class="col-3">
					<i class="fa fa-quote-left"></i><p>Shelftons doesn't charge any extra cost for home delivery and the books are in extremely good condition. The delivery is fast and multiple modes of payment are accepted. The packaging is well protected and the delivery employees strictly follow the covid protocol. Talk about a well organized store💯</p>
					<div class="rating">
		 				<i class="fa fa-star"></i>
		 				<i class="fa fa-star"></i>
		 				<i class="fa fa-star"></i>
		 				<i class="fa fa-star"></i>
		 				<i class="fa fa-star-o"></i>

	 			</div>
				 <img src="img1/mlogo-removebg.png" class="test-img">
				 </div>

				 <div class="col-3">
					<i class="fa fa-quote-left"></i><p>Shelftons is a great Bookstore! It's a place where every reader finds happiness. It has a very attracting and easy to use website(user friendly interface) and a huge variety of books are available here..!</p>
					<div class="rating">
		 				<i class="fa fa-star"></i>
		 				<i class="fa fa-star"></i>
		 				<i class="fa fa-star"></i>
		 				<i class="fa fa-star"></i>
		 				<i class="fa fa-star-o"></i>

	 			</div>
	 			 <img src="img1/mlogo-removebg.png" class="test-img">

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
 		<p class="copyright">Copyright 2021 - Online Books Store</p>
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

</body>
</html>
