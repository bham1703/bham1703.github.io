<?php
	session_start();
	if(!ISSET($_SESSION['Welcomeuser'])){
		header('loginpage.php');
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>ABOUT US</title>
	<meta name="newport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="HomePage.css">
    <link rel="shorcut icon" type="image/png" href="images/favicon2.png">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
	<style>
	</style>
</head>

<body id="AboutBody">
	
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
<div id= "AboutContent">
	<div class="textbackground1">
		<div class="OurStoryShadow">
			<div id="OurStory">
				<h1 style="font-family: 'Merienda', cursive;">OUR STORY:</h1>
				<br>
				<br>
				<p style="font-family: 'Merienda', cursive;"><strong>FUSION FOOD</strong> started in the year of 2018. two childhood friends, <strong>CHADEE KAMLESH</strong> AND<strong> BHOGUN YUVESH, </strong><br>
					shared the same passion about food. So they came up with an amazing <br>idea of
					regrouping in one place all types of delicious foods from different cultural backgrounds,<br>
					hence creating a metropolis of flavours!</p>
				<p style="font-family: 'Merienda', cursive;">Ambitious in nature, they decided to set up their own business with one objective in mind:<br> 
				sharing their passion and providing you with quality food!</p>

			</div>
		</div>
	</div>
	<div class="textbackground2">
		<div class="OurQualityShadow">
			<div id ="OurQuality">
				<h1 style="font-family: 'Merienda', cursive;">OUR QUALITY:</h1>
				<br>
					<br>
				<p><i>"YOU ARE WHAT YOU EAT!"</i></p>
				<br>
				<p style="font-family: 'Merienda', cursive;">We always believed that the quality and freshness of ingredients used in a dish, contributed in<br> 
				unique and special flavours. Thats why our vegetables and meat are mostly provided by local farmers<br>
				on a daily basis. We also ensure that our supplies are free from chemicals.</p>

			</div>
		</div>
	</div>
	
	
		<div class="contacthead">
			<h1>CONTACT INFO:</h1><br>
		</div>
	
		<div class="contacticons">
			<div class="column">
				<img src="images/telephoneicon.png" width="100px" height="100px"><br><br>
				TEL:+230 433 6969<br>
				MOB:+230 5980 8005<br>
				FAX:+230 476 8493
			</div>	
			
			<div class="column">
				<img src="images/location-pinicon.png" width="100px" height="100px"><br><br>
				22 Jump Street,<br>
				Royal Road, Pine Street, Rempart<br>
				(Opposite of Sillicon Valley Tower)<br>
		
			</div>
			
			<div class="column">			
				<img src="images/follow-phoneicon.png" width="100px" height="100px"><br><br>
				<a href="#"><img src="images/facebookicon.png" width="50px" height="50px"></a>
				<a href="#"><img src="images/instagramicon.png" width="50px" height="50px"></a><br>
				<a href="#"><img src="images/twittericon.png" width="50px" height="50px"></a>
				<a href="#"><img src="images/gmailicon.png" width="50px" height="50px"></a>
			</div>
			
		</div>
	
	
		<!--<div id="contactdetails">
				TEL:+230 433 6969<br>
				MOB:+230 5980 8005<br>
				FAX:+230 476 8493
				
				22 Jump Street,<br>
				Royal Road, Pine Street, Rempart<br>
				(Opposite of Sillicon Valley Tower)<br>
				
				<a href="#"><img src="facebookicon.png" width="50px" height="50px"></a>
				<a href="#"><img src="instagramicon.png" width="50px" height="50px"></a>
				<a href="#"><img src="twittericon.png" width="50px" height="50px"></a>
				<a href="#"><img src="gmailicon.png" width="50px" height="50px"></a>-->
		
		<div id="HomeFooter">
		<footer>
			<h3>Designed by: 2015815 and 2014205</h3>
		</footer>
	</div>
	
</body>
</html>