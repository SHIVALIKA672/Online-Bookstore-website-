<?php

session_start();
$uname= $_GET['uname'];

$bgenre = "Home / Young Adult";
$bname = "Fangirl";
$bprice= "299";
$bimg= "img1/ya10.jpg";
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


            <div class="small-container">
                <div class="row">
				<?php
					include 'config.php';
					$stmt = $conn->prepare("SELECT * FROM products");
					$stmt->execute();
					$result = $stmt->get_result();
										?>
                    <div class="col-2">
                        <img src="img1/ya10.jpg" width="50%">
                    </div>
                    <div class="col-2">
					<p><?php echo $bgenre; ?></p>
                        <h1><?php echo $bname; ?></h1>
                        <p>Fangirl is a story of two twin sisters, Wren and Cath, who have grown up without a mother and with a very busy father. Cath is an introvert and very happy to live in her own internet and book world. She admires and loves her sister, who also plays the role of her best friend.</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>

                            </div>
							<p><b>Author:Rainbow Rowell </b></p>
							<h4>Price : Rs <?php echo $bprice; ?></h4>
						<p>Publish Year:2013 </p>

                    </div><form class="form-submit" method="POST">
						<input type="hidden" class="pid" value="<?= $row['id'] ?>">

						<input type="hidden" class="pname" value="<?= $row['product_name'] ?>">

						<input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">

						<input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">

					  <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">

					  <h4>Quantity: <input type="number"  name="quantity" min="1" max="10"  ></h4>

						<input class="btn" type="submit" name="add" value="Add to Cart">

	    			</form>

                </div>
            </div>
            <?php
						if (isset($_POST['add'])) {
						$uname=$uname;
						$pname=$bname;
						$pprice=$bprice;
						$pimg=$bimg;
						$pqty= $_POST['quantity'];


						$result = mysqli_query($conn,"INSERT INTO `cart2`( `uname`, `product_name`, `product_price`, `product_image`, `qty`) VALUES ('$uname','$pname','$pprice','$pimg','$pqty')");
						if($result){
							echo "<br><h1 align =center>Book Added to Cart Succesfully..</h1>";
						}
						else{
							echo "<br><h1 align =center>Error..</h1>";
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
  		$(".addItemBtn").click(function(e){
  			e.preventDefault();
  			var $form = $(this).closest(".form-submit")
  			var pid = $form.find(".pid").val();
  			var pname = $form.find(".pname").val();
  			var pprice = $form.find(".pprice").val();
  			var pimage = $form.find(".pimage").val();
  			var pcode = $form.find(".pcode").val();

  			$.ajax({
  				url: 'action.php',
  				method: 'post',
  				data: {pid:pid , pname:pname , pprice:pprice , pimage:pimage , pcode:pcode},

  				success:function(response){
  					$("#message").html(response);
            window.scrollTo(0,0);
            load_cart_item_number();

  				}
  			});

  		});

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
