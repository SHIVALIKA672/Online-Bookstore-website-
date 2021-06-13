<?php
include 'config.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>School Admin</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style type="text/css">
		h4{
			margin-top: 3%;
			font-family: times new roman;

			text-align: center;
		}
		table{
			margin-top: 2%;
			border: 1px solid #000000;
			width: 90%;
		}
		th{
			font-family: times new roman;
			border: 1px solid #000000;
			padding:5px;
			text-align: center;
		}
		td{
			font-family: arial, san-serif;
			border: 1px solid #000000;
			padding:5px;
			text-align: center;
		}
		td:first-child{
			text-align: left;
		}
		tr:nth-child(even){
			background-color: #dddddd;
		}

	</style>

</head>
<body align="center">
<nav>
<nav class="nav justify-content-center fixed-top bg-primary">
 <div class="container">
<h1 style="color: aliceblue;">Welcome Admin</h1>
</div>
<form class="">

<a class="btn btn-primary" href="logout.php" role="button"><h4>Logout</h4></a>
</form>
</nav>
</nav>
<br><br>

<h4><b>USER DETAILS</b></h4>
<table align="center">
	<tr>

		<th><h4>FIRST NAME</h4></th>
		<th><h4>LAST NAME</h4></th>
		<th><h4>ADDRESS</h4></th>
		<th><h4>MOBILE NO.</h4></th>
		<th><h4>USERNAME</h4></th>
		<th><h4>EMAIL</h4></th>

	</tr>
	<?php

	$result="SELECT * FROM `register`";

	$query = mysqli_query($conn,$result);
	$nums =mysqli_num_rows($query);


	while($res = mysqli_fetch_array($query)){

	?>
	<tr>
		<td><?php echo $res['fname'];?></td>
		<td><?php echo $res['lname'];?></td>
		<td><?php echo $res['address'];?></td>
		<td><?php echo $res['mobile'];?></td>
		<td><?php echo $res['username'];?></td>
    <td><?php echo $res['email'];?></td>
	</tr>

  <?php
}

?>
</table>
<br>
<h4><b>ORDER DETAILS</b></h4>
<table align="center">
	<tr>

		<th><h4>NAME</h4></th>
		<th><h4>PHONE</h4></th>
		<th><h4>ADDRESS</h4></th>
		<th><h4>PRODUCTS</h4></th>
		<th><h4>TOTAL AMOUNT</h4></th>

	</tr>
	<?php

	$result="SELECT * FROM `orders`";

	$query = mysqli_query($conn,$result);
	$nums =mysqli_num_rows($query);


	while($res = mysqli_fetch_array($query)){

	?>
	<tr>
		<td><?php echo $res['name'];?></td>
		<td><?php echo $res['phone'];?></td>
		<td><?php echo $res['address'];?></td>
		<td><?php echo $res['products'];?></td>
		<td><?php echo $res['amount_paid'];?></td>

	</tr>

  <?php
}

?>
</table>
<br>


</body>
</html>
