<?php
	session_start();
	require 'config.php';
	$uname= $_GET['uname'];
  ?>
<?php
if (isset($_GET['remove'])) {
  	  $id = $_GET['remove'];

  	  $stmt = $conn->prepare('DELETE FROM cart2 WHERE id=?');
  	  $stmt->bind_param('i',$id);
  	  $stmt->execute();

  	  $_SESSION['showAlert'] = 'block';
  	  $_SESSION['message'] = 'Item removed from the cart!';

  	  header('location:cart3.php?uname=angela');
}
?>
