<?php
         session_start();
         if(isset($_POST['update'])) {
           $servername="localhost";
           $username="root";
           $password="delta";
           $dbname="pet";
           $db_con=mysqli_connect($servername,$username,$password,$dbname);
            
            $ai=$_SESSION['login_user'];
			$username=$_POST['username'];
            $email=$_POST['email'];
            $fullname=$_POST['fullname'];
            $location=$_POST['location'];
            $password=$_POST['password'];
            $sql = "UPDATE users ". "SET username = '$username' ,email='$email',fullname='$fullname',location='$location',password='$password'". 
               "WHERE  username= '$ai'" ;
           
            $retval = mysqli_query( $db_con,$sql );
            
            if(!$retval ) {
              
			  
			  echo"<script>alert('Profile not updated successfully');</script>";
             
			  
            }
           
			echo"<script>alert('Profile updated successfully');</script>";
             
            mysqli_close($db_con);
           }else{
		   }
		 
            ?>	


<!DOCTYPE html>
<html>
<head>
<title>Update profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

/* Style the header */
.header {
  padding: 40px;
  background: #841b2d;
  
}

/* Increase the font size of the h1 element */
.header h1 {
  font-size: 40px;
  color:white;
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
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.updatebtn {
  background-color: #333;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.updatebtn:hover {
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
<script type="text/javascript">
function valid()
{

if(document.confirmpwd.password.value!= document.confirmpwd.confirmpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.confirmpwd.confirmpassword.focus();
return false;
}
return true;
}
</script>

</head>
<body>

<div class="header">
  <img alt="logo" src="images/pet-house.png" height="80" width="80"/> 
  <h1 style="text-align:center;">Pet management system</h1>
  
</div>



<div class="navbar">
  <a href="homepage.php"> Dashboard</a>
  <a href="updateprofile.php">Update profile</a>
   <a href="change_password.php">Update password</a>  
   <a href="index.html">Log out</a>
    
    <?php
 
			echo "<a class='right'>Welcome ".$_SESSION['login_user']." !</a>!";
			?>
			
</div> 

<?php
	
    include "db.php";

	$ai = $_SESSION['login_user'];	
    $query=mysqli_query($db_con,"select* from users where username='$ai'");
    while($row=mysqli_fetch_array($query))
	{
	?>
			
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
    <img src="images/rabbit.jpg" style="width:100%" height="300">
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
   

   
<form action="" name="confirmpwd" method="POST" onSubmit="return valid();">
  <div class="container">
    <h1>Update profile</h1>
    <p>Please fill in this form to update profile.</p>
    <hr>
	<label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" id="username" value="<?php echo $row['username'];?>" readonly>
	<label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" value="<?php echo $row['email'];?>" required>
	<label for="fullname"><b>Full name</b></label>
    <input type="text" placeholder="Enter Full Names" name="fullname" id="fullname" value="<?php echo $row['fullname'];?>"  required>
	<label for="location"><b>Location</b></label>
    <input type="text" placeholder="Enter Location" name="location" id="location" value="<?php echo $row['location'];?>"  required>
    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" value=""  required>

    <label for="confirmpassword"><b>Confirm Password</b></label>
    <input type="password" placeholder="Confirm Password" name="confirmpassword" id="confirmpassword" value=""  required>
    <hr>
    
<?php } ?>
    <button type="submit" class="updatebtn" name="update" id="update" value="Update">Update</button>
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
