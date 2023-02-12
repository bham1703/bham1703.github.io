<?php
	session_start();
	if(!ISSET($_SESSION['Welcomeuser'])){
		header('loginpage.php');
	}
?>

<!DOCTYPE html>
<html lang="en" id="htmlgallery">
<head>
	<title>GALLERY</title>
	<meta name="newport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="HomePage.css">
	<link rel="shorcut icon" type="image/png" href="images/favicon2.png">
	<style>
	</style>
</head>

<body class="galleryBody">
	
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
	
<div id="bodyMargin">
	
		<div class="galleryHeaders">
		<h1>STARTERS</h1>
		</div>

	<div>
		<div class="gallery">
			<img src="images/crispy calamari.jpg" >
			<div class="foodDescrip">Crispy Calamari<br>Origin:Chinese</div>
		</div>

		<div class="gallery">
			<img src="images/crispy prawn.jpg">
			<div class="foodDescrip">Crispy Prawn<br>Origin:Chinese</div>
		</div>
	
		<div class="gallery">
			<img src="images/spring roll.jpg">
			<div class="foodDescrip">Spring Rolls<br>Origin:Chinese</div>
		</div>
	
		<div class="gallery">
			<img src="images/wantan.jpg">
			<div class="foodDescrip">Wantan (stuffed dumplings)<br>Origin:Chinese</div>
		</div>
		
		<div class="gallery">
			<img src="images/crispy fish.jpg">
			<div class="foodDescrip">Crispy Fish<br>Origin:Chinese</div>
		</div>
		
		<div class="gallery">
			<img src="images/crispy chicken.jpg">
			<div class="foodDescrip">Crispy Chicken<br>Origin:Chinese</div>
		</div>

		<div class="gallery">
			<img src="images/grilled paneer.jpg">
			<div class="foodDescrip">Grilled Paneer<br>Origin:Indian</div>
		</div>
		
		<div class="gallery">
			<img src="images/samossa.jpg">
			<div class="foodDescrip">Samossa<br>Origin:Mauritian</div>
		</div>
		
		<div class="gallery">
			<img src="images/caprese salad.jpg">
			<div class="foodDescrip">Caprese Salad<br>Origin:Italian</div>
		</div>

</div>

		<div class="galleryHeaders">
			<h1>MAIN COURSES</h1>
		</div>

<div>
		<div class="gallery">
			<img src="images/pizza.jpg" >
			<div class="foodDescrip">Margarita Pizza<br>Origin:Italian</div>
		</div>

		<div class="gallery">
			<img src="images/pasta.jpg">
			<div class="foodDescrip">Pasta Carbonara<br>Origin:Italian</div>
		</div>
	
		<div class="gallery">
			<img src="images/lasagna.jpg">
			<div class="foodDescrip">Lasagna<br>Origin:Italian</div>
		</div>
	
		<div class="gallery">
			<img src="images/mushroom risotto.jpg">
			<div class="foodDescrip">Risotto<br>Origin:Italian</div>
		</div>
		
		<div class="gallery">
			<img src="images/butter chicken.jpg">
			<div class="foodDescrip">Butter Chicken<br>Origin:Indian</div>
		</div>
		
		<div class="gallery">
			<img src="images/nan.jpg">
			<div class="foodDescrip">Nan (indian bread)<br>Origin:Indian</div>
		</div>

		<div class="gallery">
			<img src="images/chicken tandoori.jpg">
			<div class="foodDescrip">Chicken Tandoori<br>Origin:Indian</div>
		</div>
		
		<div class="gallery">
			<img src="images/paneer in gravy.jpg">
			<div class="foodDescrip">Paneer Gravy<br>Origin:Indian</div>
		</div>
		
		<div class="gallery">
			<img src="images/channa masala.jpg">
			<div class="foodDescrip">Channa Masala (chickpeas in gravy)<br>Origin:Indian</div>
		</div>
		
		<div class="gallery">
			<img src="images/fish-curry-with-eggplant.jpg">
			<div class="foodDescrip">Fish Curry with Eggplant<br>Origin:Mauritian</div>
		</div>
		
		<div class="gallery">
			<img src="images/bol renverser.jpg">
			<div class="foodDescrip">Bol Renverser (upside down bowl)<br>Origin:Mauritian</div>
		</div>
		
		<div class="gallery">
			<img src="images/chicken kalia.jpg">
			<div class="foodDescrip">Chicken Kalia<br>Origin:Mauritian</div>
		</div>
		
		<div class="gallery">
			<img src="images/fish vindaye.jpg">
			<div class="foodDescrip">Fish Vindaye<br>Origin:Mauritian</div>
		</div>
		
		<div class="gallery">
			<img src="images/chicken biryani.jpg">
			<div class="foodDescrip">Chicken Briyani<br>Origin:Mauritian</div>
		</div>
		
		<div class="gallery">
			<img src="images/fried rice.jpg">
			<div class="foodDescrip">Fried Rice<br>Origin:Chinese</div>
		</div>
		
		<div class="gallery">
			<img src="images/sweet and sour pork.jpg">
			<div class="foodDescrip">Sweet and Sour Pork<br>Origin:Chinese</div>
		</div>
		
		<div class="gallery">
			<img src="images/perking duck.jpg">
			<div class="foodDescrip">Perking Duck<br>Origin:Chinese</div>
		</div>
		
		<div class="gallery">
			<img src="images/braised pork with gravy.jpg">
			<div class="foodDescrip">Braised Pork<br>Origin:Chinese</div>
		</div>

</div>

		<div class="galleryHeaders">
			<h1>DESSERTS</h1>
		</div>

<div>
		<div class="gallery">
			<img src="images/ice cream.jpg" >
			<div class="foodDescrip">Ice Cream<br>Origin:Italian</div>
		</div>

		<div class="gallery">
			<img src="images/tiramisu.jpg">
			<div class="foodDescrip">Tiramisu<br>Origin:Italian</div>
		</div>
	
		<div class="gallery">
			<img src="images/Rasmalai.jpg">
			<div class="foodDescrip">Rasmalai<br>Origin:Indian</div>
		</div>
	
		<div class="gallery">
			<img src="images/rasgulla.jpg">
			<div class="foodDescrip">Rasgulla<br>Origin:Indian</div>
		</div>
		
		<div class="gallery">
			<img src="images/creme brulee.jpg">
			<div class="foodDescrip">Creme Brulee<br>Origin:French</div>
		</div>
		
		<div class="gallery">
			<img src="images/chocolate mousse.jpg">
			<div class="foodDescrip">Chocolate Mousse<br>Origin:French</div>
		</div>
</div>
</div>

	<div id="manzer">
	</div>
	
	<footer>
		<div id="HomeFooter">
			<p>Designed by: 2015815 and 2014205</p>
		</div>
	</footer>
	
</body>		

</html>


<!--<div>
		<div class="gallery">
			<img src=""  width="600" height="400">
			<div class="foodDescrip">add<br>Origin:</div>
		</div>

		<div class="gallery">
			<img src=""  width="600" height="400">
			<div class="foodDescrip">add<br>Origin:</div>
		</div>
	
		<div class="gallery">
			<img src=""  width="600" height="400">
			<div class="foodDescrip">add<br>Origin:</div>
		</div>
	<div>
-->