<?php
require 'config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>All Products - Onile Bookstore</title>
	<link rel="stylesheet"  href="./style.css">

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
						<li><a href="">Contacts</a></li>
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

					<form action="login.php" method="post" class="form">
						<div>
							<h4><b>LOGIN </b></h4><br>

							<input type="text" Placeholder="Username " name="username" required>
						</div><br>
						<div>

							<input type="password" Placeholder="Password" name="password" required>
						</div><br>

					  <div>
						<button type="submit" class="btn btn-warning" name="login">Login</button>

						<a class="btn btn-warning" href="register.php" role="button">Register</a>

					  </div>

					</form>



					<?php
					$servername="localhost";
					$username="root";
					$password="";
					$database_name="book";
					$table="register";

					$conn=mysqli_connect($servername,$username,$password,$database_name);

					if(!$conn)
					{
						die("Connection failed:" . mysqli_connect_error());
					}


if(isset($_POST['login']))
{
  session_start();
  $username=$_POST['username'];
  $password=$_POST['password'];

if($username=="" && $password=="")
{
  echo "<br><center><h4>Please enter the all Credentials<h4></center>";
}

else if($username=='admin' && $password=='admin'){

    header('Location: admin.php');
	}
else  {
  $sql1="SELECT `username`,`password` FROM $table WHERE `username`='$username' " ;
  $check=mysqli_query($conn, $sql1);
  $count=mysqli_num_rows($check);
  if($count!=0)
  {
    while($row=mysqli_fetch_assoc($check)){
      $dbusername=$row['username'];
      $dbpassword=$row['password'];
    }
    if($username==$dbusername && $password==$dbpassword){
      $_SESSION['uname']=$username;
      header('Location:index1.php');
    }
    else {
      echo "<center><h4>Incorrect username or Password</h4></center>";
    }
  }
}
}

?>

</div>
		</div>
</div>

</body>
</html>
