<?php

session_start();
$name= $_GET['name'];
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

					<i class="fa fa-book" aria-hidden="true" size="100px">SHELFTONS</i>
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
						  <a href="younhadult.php">YOUNG ADULT</a>
						  <a href="novel.html">NOVEL & FICTION</a>
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
			<h6> <?php echo $name; ?> </h6>
			<img src="images/cart-removebg-preview.png" width="30px" height="30px">
			<img src="images/menu.png" class="menu-icon" onclick="menutoggle()" >
            </div>
            </div>
            </div>

            <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="table-responsive mt-2">
                        <table calss="table table-bordered table-striped text-center">
                        <thead>
                                    <tr>
                                            <td colspan="7">
                                                <h4 class="text-center text-info m-0">Products in your cart!</h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Total price</th>
                                            <th>
                                                <a href="action.php?clear=all" class="badge-danger badge p-2"><i class="fas fa-trash" onclick="return confirm('Are you sure to clear your cart');
                                                    "></i>&nbsp;&nbsp; cart</a>
                                            </th>

                                        </tr>
                        </thead>
                        <tbody>
                            <?php
                                require 'config.php';
                                $stmt = $conn->prepare("SELECT * FROM cart2 where uname='$name'");
                                $stmt->execute();
                                $result = $stmt->get_result();
                                $grand_total = 0;
                                $row = $result->fetch_assoc();


                            ?>
                            <tr>
                                <td>
                                    <?= $row['id'] ?>
                                </td>
                                <td><img src="<?= $row['product_image'] ?>" width="50"></td>
                                <td><?= $row['product_price'] ?></td>
                                <td><input type="number" class="form-control itemQty" value="<?= $row['qty'] ?>" style="width:75px;" min="1" max="10"></td>
                                <td></td>
                            </tr>


                        </tbody>

                        </table>
                    </div>
                </div>
            </div>

  </div>
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
