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


            <div class="small-container">
                <div class="row">
                    <div class="col-2">
                        <img src="img1/ya04.jpg" width="50%">
                    </div>
                    <div class="col-2">
                        <p>Home/Young Adult</p>
                        <h1>They both die at the end</h1>
                        <p>On September 5, a little after midnight, Death-Cast calls Mateo Torrez and Rufus Emeterio to give them some bad news: They're going to die today. Mateo and Rufus are total strangers, but, for different reasons, they're both looking to make a new friend on their End Day. The good news: There's an app for that.</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
           
                            </div>
							<p><b>Author: Adam Silvera</b></p>
                        <h4>Price : Rs250.00</h4>
						<p>Publish year:2017 </p>
                        <a href="register.php" class="btn">Register</a>
						<a href="cart.php" class="btn">Add To Cart</a>
                    </div>
                </div>
            </div>
            </body>
            </html>
