<?php
  $conn = new mysqli("localhost" ,"root", "" , "book");
  if($conn->connect_error){
    die("Connnection Failed!".$conn->connect_error);
  }
?>
