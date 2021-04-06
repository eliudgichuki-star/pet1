
<?php
        
         session_start();
         if(isset($_POST['update'])) {
           $servername="localhost";
           $username="root";
           $password="delta";
           $dbname="pet";
           $db_con=mysqli_connect($servername,$username,$password,$dbname);
            
            $id=$_REQUEST['id'];
  
     $filename = $_FILES["image"]["name"];
     $tempname = $_FILES["image"]["tmp_name"];    
     $folder = "image/".$filename;
	 
     $name=$_POST['name'];
     $size=$_POST['size'];
     $weight=$_POST['weight'];
     $age=$_POST['age'];
     $colour=$_POST['colour'];
            $sql = "UPDATE pet ". "SET image = '$filename' ,name='$name',size='$size',weight='$weight',age='$age',colour='$colour'". 
               "WHERE  petID= '$id'" ;
           
            $retval = mysqli_query( $db_con,$sql );
            
            if(!$retval ) {
              
			  
			  echo"<script>alert('Pet not updated successfully');</script>";
             
			  
            }
           
			echo"<script>alert('Pet updated successfully');</script>";
             if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
	
header("refresh:0; url=pet_details.php");
            mysqli_close($db_con);
           }else{
		   }
		 
            ?>	




<!DOCTYPE html>
<html>
<head>
<title>Edit Pet Details</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* Style the header */
.header {
  padding: 80px;
  text-align: center;
  background: #841b2d;
  color: white;
}

/* Style the top navigation bar */
.navbar {
  overflow: hidden;
  background-color: #333;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}

/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}





img {vertical-align: middle;}

* {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}






body {
  font-family: Arial, Helvetica, sans-serif;
 
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text],input[type=number]{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
input[type=file]{
  width: 100%;
  padding: 5px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
 
   }
   label input[type="file"] {
    position: fixed;
    top: -500px;
}


input[type=text]:focus,input[type=number]:focus ,input[type=file]:focus{
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #333;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}


</style>


</head>
<body>
<div class="header">
  <h1>Pet management system</h1>
  
</div>



<div class="navbar">
  <a href="homepage.php"> Dashboard</a>
  <a href="updateprofile.php">Update profile</a>
  
   <a href="index.html">Log out</a>
    
    <?php
         include "db.php";

			echo "<a class='right'>Welcome ".$_SESSION['login_user']." !</a>!";
	$id=$_REQUEST['id'];
    $query=mysqli_query($db_con,"select *from pet where petID='$id'");
    
    while($row=mysqli_fetch_array($query))
	{
	?>
			
			
</div>
			
<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="images/dog.jpg" width="100%" height="300">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="images/cat.jpg" style="width:100%" height="300">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="images/dog1.jpg" style="width:100%" height="300">
    <div class="text">Caption Three</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)"></a>
  <a class="next" onclick="plusSlides(1)"></a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>		
   

   
<form action="" method="POST" enctype="multipart/form-data" >
  <div class="container">
    <h1>Edit pet details</h1>
    <p>Please check this form to edit pet details.</p>
    <hr>

	<label for="image"><b>Choose pet image</b></label>
    <input type="file" accept="image/jpg" placeholder="Choose pet image" name="image" id="image" value="<?php print $row['image'];?>" required>
	<label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter pet name" name="name" id="name" value="<?php echo $row['name'];?>" required>
	<label for="size"><b>Size[ Mini, Standard, Large, and XL ]</b></label>
    <input type="text" placeholder="Enter pet size" name="size" id="size"  value="<?php echo $row['size'];?>" required>
	<label for="weight"><b>Weight[ kgs ]</b></label>
    <input type="number" placeholder="Enter pet weight" name="weight" id="weight" value="<?php echo $row['weight'];?>" required>
	<label for="age"><b>Age[ yrs ]</b></label>
    <input type="number" placeholder="Enter pet age" name="age" id="age" value="<?php echo $row['age'];?>" required>
    <label for="colour"><b>Colour</b></label>
    <input type="text" placeholder="Enter pet colour" name="colour" id="colour" value="<?php echo $row['colour'];?>" required>
    
   
<?php } ?>
    <button type="submit" class="registerbtn" name="update">Edit Pet Details</button>
  </div>
  
  
 
</form>
<script type="text/JavaScript">


var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}






</script>
</body>
</html>
