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
$confirmpassword=$_POST['confirmpassword'];




$sql="INSERT INTO users (username,email,fullname,location,password,confirmpassword) VALUES('$username','$email','$fullname','$location','$password','$confirmpassword')";

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