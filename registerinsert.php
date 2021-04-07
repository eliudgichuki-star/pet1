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
$username=$_POST['username'];
$email=$_POST['email'];
$fullname=$_POST['fullname'];
$location=$_POST['location'];
$password=$_POST['password'];
//salt and hash password
$hash  = password_hash($password, PASSWORD_DEFAULT);



$sql="INSERT INTO users (username,email,fullname,location,password) VALUES('$username','$email','$fullname','$location','$hash')";

if(!mysqli_query($con,$sql))
	
	{
		echo"<script>alert('User Not Succssfully registered');</script>";
		
	}
else
{

	echo"<script>alert('User Succssfully registered');</script>";
}
	header("refresh:1; url=register.php");


				

?>