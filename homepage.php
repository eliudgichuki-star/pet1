
<?php
	session_start();
	// if($_SESSION['login_user']==null){
	// 	header('location:home_page.php');
	// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Dashboard</title>
<meta charset="UTF-8">
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




/* Column container */
.row {  
  display: flex;
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}

/* Main column */
.main {   
  flex: 70%;
  background-color: white;
  padding: 20px;
}

/* Fake image, just for this example */
.fakeimg {
  background-color: #7f1734;
  width: 100%;
  padding: 20px;
}

.fakeimg1 {
  background-color: #ffae42;
  width: 100%;
  padding: 20px;
}


/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #841b2d;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width:100%;
  }
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





a.button4{
display:inline-block;
padding:0.3em 1.2em;
margin:0 0.1em 0.1em 0;
border:0.16em solid rgba(255,255,255,0);
border-radius:2em;
box-sizing: border-box;
text-decoration:none;
font-family:'Roboto',sans-serif;
font-weight:300;
color:#FFFFFF;
text-shadow: 0 0.04em 0.04em rgba(0,0,0,0.35);
text-align:center;
transition: all 0.2s;
}
a.button4:hover{
border-color: rgba(255,255,255,1);
}
@media all and (max-width:30em){
a.button4{
display:block;
margin:0.2em auto;
}
}

#rcorners1 {
  border-radius: 25px;
  
  padding: 20px; 
  

}
p,h2,h3{
	color:white;
	
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
 
			echo "<a class='right'>Welcome ".$_SESSION['login_user']." !</a>";
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

<div class="row">
  <div class="side">
    
    
    <div class="fakeimg" style="height:250px;" id="rcorners1">
	<h2>Pet Manager functions</h2>
	<a href="add_pet_details.php" class="button4" style="background-color:#ffae42">Add Pet Details.</a><br><br><br>
    <a href="pet_details.php" class="button4" style="background-color:#ffae42">View Pet Detils</a>
	</div>
	
    
  </div>
  <div class="main">
    
   
    <div class="fakeimg1" style="height:200px;" id="rcorners1">
	 <h2>Add pet description</h2>
	<p>This when the pet manager wants to add a pet to his pet listing.</p>
    <p>Kindly fill in the form to add pet details.</p>
	<p>This link allows pet manager to manage pet information details such as name,age,colour and weight </p>
	</div>

  

    <br>
    <br>
	<div class="fakeimg" style="height:200px;" id="rcorners1">
	<h2>View pet description</h2>
    <p>This is when the pet manager wants to manage his pet listing.</p>
	<p>Kindly view the infor on pet details.</p>
	<p>This link allows pet manager to view pet information details such as name,age,colour and weight </p>
  </div>
</div>
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
<div class="footer">
  <h2>2020 All Right Reserved</h2>
</div>

</body>
</html>
