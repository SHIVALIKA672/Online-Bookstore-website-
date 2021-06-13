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
                        <img src="img1/ya03.jpg" width="50%">
                    </div>
                    <div class="col-2">
                        <p>Home/Young Adult</p>
                        <h1>ANNA and the French kiss</h1>
                        <p>Anna and the French Kiss by Stephanie Perkins is a teen romance placed at the academy of SOAP (School of America in Paris). The main character Anna is forced to go to SOAP by her parents, though she would rather stay in Atlanta and spend her Senior year with her friends and possible boyfriend (Toph).</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>

                            </div>
							<p><b>Author:Stephanie Perkins </b></p>
                        <h4>Price : Rs350.00</h4>
						<p>Publish year:2010</p>
						<a href="register.php" class="btn">Register</a>
						<a href="cart.php" class="btn">Add To Cart</a>
                    </div>
                </div>
            </div>
            </body>
            </html>
