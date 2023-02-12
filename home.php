<?php
	session_start();
	if(!isset($_SESSION['Welcomeuser'])){
		header('loginpage.php');
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Fusion food~Home</title>
	<meta name="newport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="HomePage.css">
	<link rel="shorcut icon" type="image/png" href="images/favicon2.png">
	<link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">

	<script src="js/jquery-3.6.0.js"></script> 
	
	<script>
$(document).ready(function(){
  $("button").click(function(){
    $(".speciality").fadeToggle();
    $(".openingHour").fadeToggle("slow");
    $("#div3").fadeToggle(3000);
  });
});
</script>
</head>

<body id="homeheight" >
	
	<div id=NavBar>
		<ul>
			<li><a href="home.php" class="active">HOME</a></li>
			<li><a href="menu.php">MENU</a></li>
			<li><a href="gallery.php">GALLERY</a></li>
			<li><a href="about.php">ABOUT US</a></li>
			
			<li class="dropdown" >
			<a class="dropdown-button" style="display:block;">SERVICES</a>
				<div class="dropdown-content" >
					<a href="order.php">ORDER</a>
					<a href="reservation.php">RESERVATION</a>
				</div>
			</li>
			
			<li class="dropdown" >
			<a class="dropdown-button" style="display:block;"><img src="images/settingswhite.PNG" width="30px" height="20px" ></a>
				<div class="dropdown-content" >
				<a href="logout.php">LOG OUT</a>
					<a href="changepassword.php">CHANGE PASSWORD</a>
					<a href="Delete account form.php">DELETE ACCOUNT</a>
				</div>
			</li>
		</ul>
	</div>
	
	
	
	<div class="HomeHeader">
		<header class="header">
				<h1 style="font-family: 'Merienda', cursive;">FUSION FOOD</h1>
		</header>
	
		<div class="welcome">
			<div class="image">
				<img src="images/chef_peekingduck.JPG" alt="Chef" width="500px" height="504px" >
			</div>
			<div class="Text">
				<p id="title" style="font-family: 'Merienda', cursive;">WELCOME TO FUSION </br> FOOD <?PHP echo $_SESSION['Welcomeuser'];?></p>
				<P>Taste all kind of culture here in our reastaurant. Our cuisine is a totally unique taste experience.
				   We make sure all the ingredients are fresh and of excellent quality to ensure maximum flavors and taste.</p>
				   <br>
				<p>We are located at Riviere Du Rempart(more location detail available in about us). Our building consists of a ground floor and first floor.
				The Ground floor is for customers and as for the first floor is reserved for events like birthdays, business meetings, etc.
                All the guests are treated to first class dining experience in  a warm and friendly atmosphere.</p>
				<br>
			</div>
		</div>
		
		<button id="homebuttn"><img src="images/updown.png" height="" width=""></button><br><br>
		
		<div class="speciality">
			<div class="Tables">
				<p id="subtitle" style="font-family: 'Merienda', cursive;">CHECK OUR SPECIALITIES</p>
				<table border=1>
					<tr>
						<th>Region</th>
						<th>Speciality</th>
					</tr>
					<tr>
						<td>Indian</td>
						<td>Butter Chicken</td>
					</tr>
					<tr>
						<td>Italian</td>
						<td>Pasta Carbonara</td>
					</tr>
					<tr>
						<td>Chinese</td>
						<td>Sweet and Sour Pork</td>
					</tr>
					<tr>
						<td>Mauritian</td>
						<td>Fish Vindaye</td>
					</tr>
				</table>
			</div>
			<div class="image2">
				<img src="images/speciality.JPG" alt="Chef" width="500px" height="565px" >
			</div>
		</div>
	
		<div class="openingHour">
			<p id="subtitle2" style="font-family: 'Merienda', cursive;">OPENING HOURS</p>
			<table class="tables2" border=1>
				<tr>
					<th>Day</th>
					<th>Opening time</th>
					<th>Closing time</th>
				</tr>
				<tr>
					<td>Mon-Wed</td>
					<td>11:00</td>
					<td>23:00</td>
				</tr>
				<tr>
					<td>Thur</td>
					<td colspan="2">Closed</td>
				</tr>
				<tr>
					<td>Sat</td>
					<td rowspan="2" colspan="2">Closed unless reserved for event</td>
				</tr>
				<tr>
					<td>Sun</td>
				</tr>
			</table>
		</div>
	
		<div id="HomeFooter">
			<footer>
				<h3>Designed by: Chadee Ganeshwar(2015815)  and  Bhogun Yuvesh(2014205)</h3>
			</footer>
		</div>
	</div>
</body>
</html>



