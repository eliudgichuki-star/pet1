<?php
if (isset($_POST['upload'])) {
$con=mysqli_connect('localhost','root','delta');

if(!$con)
	
	{
		
		echo'Not connected to server';
		
	}
if(!mysqli_select_db($con,'pet'))
{
	
	echo'Database not selected';
}



  
    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];    
        $folder = "image/".$filename;
$name=$_POST['name'];
$size=$_POST['size'];
$weight=$_POST['weight'];
$age=$_POST['age'];
$colour=$_POST['colour'];

$sql="INSERT INTO pet(image,name,size,weight,age,colour) VALUES('$filename','$name','$size','$weight','$age','$colour')";


if(!mysqli_query($con,$sql))
	
	{
		echo"<script>alert('Pet Details Not Succssfully Submitted');</script>";
		
	}
else
{

	echo"<script>alert('Pet Details Succssfully Submitted');</script>";
}
// Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
	
header("refresh:1; url=add_pet_details.php");

}
?>