<?php
	session_start();
	// if($_SESSION['login_user']==null){
	// 	header('location:home_page.php');
	// }
?>

<!DOCTYPE html>
<html>
<head>
<title>
View Pet Details
</title>
</head>
<body>

		
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





		table {
			 border-collapse: collapse; 
			 margin-left: 20%;
			 margin-right: 20%;
			}
			tr/*:nth-child(3)*/ {
			 border: solid thin;
			}
			
	

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #841b2d;
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




		</style>
		
		
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
<h3 style="color:#841b2d;"><center>Pet Related Info</center></h3></td>
<table cellpadding="20">
<tr style="color:#841b2d;">
<th align="center">Image</th>
<th align="center">Name</th>
<th align="center">Size</th>
<th align="center">Weight[ kgs ]</th>
<th align="center">Age[ yrs ]</th>
<th align="center">Colour</th>
<th align="center">Edit</th>
<th align="center">Delete</th>

</tr>

<?php
include "db.php";

$query=mysqli_query($db_con,"select* from pet");

while($row=mysqli_fetch_array($query))
	{
	?>
	<tr style="color:#841b2d;">

     <td align="center"><?php echo "<img src='image/".$row['image']."' height='130' width='150' >";?></td>
      <td align="center"><?php echo $row['name'];?></td>
	   <td align="center"><?php echo $row['size'];?></td>
      <td align="center"><?php echo $row['weight'];?></td>
	   <td align="center"><?php echo $row['age'];?></td>
	   <td align="center"><?php echo $row['colour'];?></td>
	   <td align="center"><a href="edit_pet_details.php?id=<?php echo $row["petID"]; ?>">Edit</a></td>
	   <td align="center"><a href="delete.php?id=<?php echo $row["petID"]; ?>">Delete</a></td>
	   </tr>

      
	   
	   
	 </tr>
	<?php } 
	?>
	</table>
	
	<br>
	<br>
	<br>
	<div class="footer">
  <h2>2020 All Right Reserved</h2>
</div>
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
		
		
	




