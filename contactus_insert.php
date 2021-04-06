<?php

$con=mysqli_connect('localhost','root','delta');

if(!$con)
	
	{
		
		echo'Not connected to server';
		
	}
if(!mysqli_select_db($con,'pet'))
{
	
	echo'Database not selected';
}
$name=$_POST['name'];
$email=$_POST['email'];
$phoneno=$_POST['phoneno'];
$message=$_POST['message'];


$sql="INSERT INTO contact(name,email,phoneno,message) VALUES('$name','$email','$phoneno','$message')";


if(!mysqli_query($con,$sql))
	
	{
		echo"<script>alert('Contact Details Not Succssfully Submitted');</script>";
		
	}
else
{

	echo"<script>alert('Contact Details Succssfully Submitted');</script>";
}
	
header("refresh:1; url=contactus.php");


?>