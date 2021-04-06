<?php

require('db.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM pet WHERE petID=$id"; 
$result = mysqli_query($db_con,$query) or die ( mysqli_error());
header("Location: pet_details.php"); 
?>