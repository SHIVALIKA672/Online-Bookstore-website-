<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "cart");
if(isset($_POST["add_to_cart"]))
{
		 if(isset($_SESSION["shopping_cart"]))
		 {
					$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
					if(!in_array($_GET["id"], $item_array_id))
					{
							 $count = count($_SESSION["shopping_cart"]);
							 $item_array = array(
										'item_id'               =>     $_GET["id"],
										'item_name'               =>     $_POST["hidden_name"],
										'item_price'          =>     $_POST["hidden_price"],
										'item_quantity'          =>     $_POST["quantity"]
							 );
							 $_SESSION["shopping_cart"][$count] = $item_array;
					}
					else
					{
							 echo '<script>alert("Item Already Added")</script>';
							 echo '<script>window.location="index.php"</script>';
					}
		 }
		 else
		 {
					$item_array = array(
							 'item_id'               =>     $_GET["id"],
							 'item_name'               =>     $_POST["hidden_name"],
							 'item_price'          =>     $_POST["hidden_price"],
							 'item_quantity'          =>     $_POST["quantity"]
					);
					$_SESSION["shopping_cart"][0] = $item_array;
		 }
}
if(isset($_GET["action"]))
{
		 if($_GET["action"] == "delete")
		 {
					foreach($_SESSION["shopping_cart"] as $keys => $values)
					{
							 if($values["item_id"] == $_GET["id"])
							 {
										unset($_SESSION["shopping_cart"][$keys]);
										echo '<script>alert("Item Removed")</script>';
										echo '<script>window.location="index.php"</script>';
							 }
					}
		 }
}
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


						<div class="container" style="width:700px;">
	                <h3 align="center">Simple PHP Mysql Shopping Cart</h3><br />
	                <?php
	                $query = "SELECT * FROM tbl_product ORDER BY id ASC";
	                $result = mysqli_query($connect, $query);
	                if(mysqli_num_rows($result) > 0)
	                {
	                     while($row = mysqli_fetch_array($result))
	                     {
	                ?>
	                <div class="col-md-4">
	                     <form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">
	                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
	                               <img src="<?php echo $row["image"]; ?>" class="img-responsive" /><br />
	                               <h4 class="text-info"><?php echo $row["name"]; ?></h4>
	                               <h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>
	                               <input type="text" name="quantity" class="form-control" value="1" />
	                               <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
	                               <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
	                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
	                          </div>
	                     </form>
	                </div>
	                <?php
	                     }
	                }
	                ?>
	                <div style="clear:both"></div>
	                <br />
	                <h3>Order Details</h3>
	                <div class="table-responsive">
	                     <table class="table table-bordered">
	                          <tr>
	                               <th width="40%">Item Name</th>
	                               <th width="10%">Quantity</th>
	                               <th width="20%">Price</th>
	                               <th width="15%">Total</th>
	                               <th width="5%">Action</th>
	                          </tr>
	                          <?php
	                          if(!empty($_SESSION["shopping_cart"]))
	                          {
	                               $total = 0;
	                               foreach($_SESSION["shopping_cart"] as $keys => $values)
	                               {
	                          ?>
	                          <tr>
	                               <td><?php echo $values["item_name"]; ?></td>
	                               <td><?php echo $values["item_quantity"]; ?></td>
	                               <td>$ <?php echo $values["item_price"]; ?></td>
	                               <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
	                               <td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
	                          </tr>
	                          <?php
	                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);
	                               }
	                          ?>
	                          <tr>
	                               <td colspan="3" align="right">Total</td>
	                               <td align="right">$ <?php echo number_format($total, 2); ?></td>
	                               <td></td>
	                          </tr>
	                          <?php
	                          }
	                          ?>
	                     </table>
	                </div>
	           </div>
	           <br />
	      </body>
	 </html>
