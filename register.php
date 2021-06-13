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
				<a href="cart.html"><img src="images/cart-removebg-preview.png" width="30px" height="30px"></a>
				<img src="images/menu.png" class="menu-icon" onclick="menutoggle()" >

			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-2">
					<img src="images/logo4.png">

				</div>

					<form action="register.php" method="post" class="form">
						<div>
							<h3>REGISTRATION</h3><br>
							<div>
							<input type="text" Placeholder="First Name" name="fname" required>
						</div><br>
						<div>
							<input type="text" Placeholder="Last Name" name="lname" required>
						</div><br>
						<div>
							<input type="address" Placeholder="Address" name="address" required>
						</div><br>
						<div>
							<input type="number" Placeholder="Mobile Number" name="mobile" required>
						</div><br>
							<input type="text" Placeholder="Username " name="username" required>
						</div><br>
						<div>

							<input type="email" Placeholder="Email" name="email" required>
						</div><br>
						<div>

							<input type="password" Placeholder="Password" name="password" required>
						</div><br>

					  <div>
					  <a class="btn btn-warning" href="login.php" role="button">Login</a>

						<button class="btn btn-warning" name="save"  role="button">Register</button>

					  </div>
					</form>
					<?php
$servername="localhost";
$username="root";
$password="";
$database_name="book";

$conn=mysqli_connect($servername,$username,$password,$database_name);

if(!$conn)
{
    die("Connection failed:" . mysqli_connect_error());
}

if(isset($_POST['save']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql_query = "INSERT INTO register(fname,lname,address,mobile,username,email,password)
    VALUES('$fname','$lname','$address','$mobile','$username','$email','$password')";

    if(mysqli_query($conn,$sql_query))
    {
        echo"Thankyou! Now you can login to continue shopping:)";
    }
    else
    {
        echo"Error" . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
			</div>
		</div>
</div>

</body>
</html>
