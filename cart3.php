<?php
require 'config.php';
session_start();
$uname= $_GET['uname'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bookstore | Ecommerce Website Design</title>
	<style>
		table{
			border:2px solid black

					}
		th,td{
			border:1px solid black

				}
				input,input::-webkit-input-placeholder{
					line-height:40px;
					font-size:30px;
				}
	</style>
	<link rel="stylesheet"  href="style.css">

	<link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <div class="header">

		<div class="container">
			<div class = "navbar">
				<div class="logo">

					<i class="fa fa-book" aria-hidden="true" size="100px">SHELFTONS</i>
				</div>
			<nav>
				<ul id="MenuItems">
					<li><a href="index1.php">Home</a></li>
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

            <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="table-responsive mt-2">
                      <table align="center"  cellpadding="10">
<tr>

  <th><h3>PRODUCT NAME</h3></th>
  <th><h3>PRODUCT PRICE</h3></th>
  <th><h3>QUANTITY</h3></th>
	<th><h3>TOTAL PRICE</h3></th>
  <th><h3>OPERATION</h3></th>

</tr>
<?php

$result="SELECT * FROM cart2 where uname='$uname'";

$query = mysqli_query($conn,$result);
$nums =mysqli_num_rows($query);
$gtotal=0;
$items="";
while($res = mysqli_fetch_array($query)){

?>
<tr>
  <td style=font-size:25px><?php echo $res['product_name'];?></td>
  <td align="center"><h4><?php echo $res['product_price'];?></h4></td>
  <td align="center"><h4><?php echo $res['qty'] ?></h4></td>
	<td align="center"><h4><?php echo ($res['product_price']*$res['qty']); ?></h4></td>
  <td align="center"><a href="delete.php?remove=<?= $res['id'] ?>?uname=<?php echo $uname?>" class="text-danger lead" onclick="return confirm('Are you sure want to remove this item?');">REMOVE</a></td>

</tr>
<?php $gtotal += ($res['product_price']*$res['qty']); ?>
<?php
		$items = $items . $res['product_name'].'('.$res['qty'].'),'
	 ?>
<?php
}
?>
<tr>
    	<td align="right" colspan="3"><h4>Grand Total</h4></td>
    	<td align="center" ><h4><?= number_format($gtotal,2); ?></h4></td>
    </tr>
</table>
<br>
<div align="center">

<form class="form-submit" method="POST">
	<div align="center">
	<input type="text" Placeholder="Name" name="custname" size="30" required>
	&nbsp;
		&nbsp;
			&nbsp;
	<input type="number" Placeholder="Mobile Number" name="custphone" size="30" required>
	<br>
	<br>
		<input type="text" Placeholder="Address" name="custaddress" size="30" required>
  </div>
	<input class="btn" type="submit" name="order" value="Place Order" >
</form>
</div>
                    </div>
                </div>
            </div>

</div>



<?php
if (isset($_POST['order'])) {
$cuname=$uname;
$cname=$_POST['custname'];
$cphone=$_POST['custphone'];
$caddress=$_POST['custaddress'];
$citems=$items;
$ctotal= number_format($gtotal,2);

$result = mysqli_query($conn,"INSERT INTO `orders`( `username`,`name`,`phone`,`address`, `products`, `amount_paid`) VALUES ('$cuname','$cname','$cphone','$caddress','$citems','$ctotal')");
if($result){
 	echo "<br><h1 align =center>Order Placed Successfully</h1>";
	echo "<br><h1 align =center>Payement Mode: Cash on delivery</h1>";
}
else{
	echo "<br>Error..";
}

}
?>


	<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script type="text/javascript">
  	$(document).ready(function(){

            load_cart_item_number();


  			function load_cart_item_number(){
            $.ajax({
            url: 'action.php',
            method: 'get',
            data: {cartItem: "cart_item"},
            success:function(response){
                $("#cart-item").html(response)
            }
        });
      }
  	});

  </script>

         </body>
            </html>
