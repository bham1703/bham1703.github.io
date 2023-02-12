<?php
	session_start();
	if(!ISSET($_SESSION['Welcomeuser'])){
		header('loginpage.php');
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>MENU</title>
	<meta name="newport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="HomePage.css">
	<link rel="shorcut icon" type="image/png" href="images/favicon2.png">
	<style>
	</style>
</head>

<body id="menubackground" style="background-color:rgb(0,0,0,0.1);">
	
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
	
	<div class="slideshow-container">
		<div class="mySlides fade">
			<div class="numbertext">1 / 7</div>
			<div class="menu">
				<h2 class="title">~Drinks~</h2>
				<img src="images/drinks.JPG" alt="drink" style="width:600px;height:550px;">
				<div class="menu-list">
					<h3>Non-Alcoholic</h3>
					<p class="p1">
						Soft Drinks
						</br>
						0.5 Litre_ _ _ _ _ _ _ _ _Rs 40
						</br>
						1.0 Litre_ _ _ _ _ _ _ _ _Rs 50
						</br>
						1.5 Litres_ _ _ _ _ _ _ __Rs 60
						</br>
						Juice
						</br>
						Grapetizer/</br>
						Appletizer_ _ _ _ _ _ _ __Rs 80
						</br>
						Ceres_ _ _ _ _ _ _ _ _ _ _Rs 85
					</p>
					<h3>Alcoholic</h3>
					<p class="p1">
						Beer_ _ _ _ _ _ _ _ _ _ __Rs 100
						</br>
						Whisky_ _ _ _ _ _ _ _ _ __Rs 200
						</br>
						Red Wine_ _ _ _ _ _ _ _ __Rs 150
						</br>
						Vodka_ _ _ _ _ _ _ _ _ _ _Rs 200
					</p>
					<h3>Cocktails</h3>
					<p class="p1">
						Mojito_ _ _ _ _ _ _ _ _ __Rs 250
						</br>
						Bloody Mary_ _ _ _ _ _ _ _Rs 300
						</br>
						Margarita_ _ _ _ _ _ _ _ _Rs 300
					</p>
				</div>
			</div>
		</div>
		
		<div class="mySlides fade">
			<div class="numbertext">2 / 7</div>
			<div class="menu">
				<h2 class="title">~Starters~</h2>
				<img src="images/crispy chicken.JPG" alt="starter" style="width:600px;height:550px;">
				<div class="menu-list">
					<p class="p1">
						Crispy Calamare_ _ _ _ _ _Rs 350
						</br></br>
						Crispy Prawn_ _ _ _ _ _ __Rs 350
						</br></br>
						Spring Rolls_ _ _ _ _ _ __Rs 250
						</br></br>
						Wantan_ _ _ _ _ _ _ _ _ __Rs 250
						</br></br>
						Crispy Fish_ _ _ _ _ _ _ _Rs 400
						</br></br>
						Crispy Chicken_ _ _ _ _ __Rs 350
						</br></br>
						Grilled Paneer_ _ _ _ _ __Rs 200
						</br></br>
						Samossa_ _ _ _ _ _ _ _ _ _Rs 250
						</br></br>
						Caprese Salad_ _ _ _ _ _ _Rs 200
					</p>
				</div>
			</div>
		</div>
		
		<div class="mySlides fade">
			<div class="numbertext">3 / 7</div>
			<div class="menu">
				<h2 class="title">~Italian~</h2>
				<img src="images/pizza.JPG" alt="italian" style="width:600px;height:550px;">
				<div class="menu-list">
					<p class="p1">
						Margarita Pizza_ _ _ _ _ _Rs 500
						</br></br>
						Pasta Carbonara_ _ _ _ _ _Rs 450
						</br></br>
						Risotto_ _ _ _ _ _ _ _ _ _Rs 450
						</br></br>
						Lasagna_ _ _ _ _ _ _ _ _ _Rs 450
						</br></br>
						Spaghetti Meatballs_ _ _ _Rs 500
						</br></br>
						Calzones_ _ _ _ _ _ _ _ __Rs 400
						</br></br>
						Caprese chicken_ _ _ _ _ _Rs 500
					</p>
				</div>
			</div>
		</div>
		
		<div class="mySlides fade">
			<div class="numbertext">4 / 7</div>
			<div class="menu">
				<h2 class="title">~Indian~</h2>
				<img src="images/butter chicken.JPG" alt="indian" style="width:600px;height:550px;">
				<div class="menu-list">
					<p class="p1">
						Butter Chicken_ _ _ _ _ __Rs 500
						</br></br>
						Nan(Indian Bread){x10}_ __Rs 300
						</br></br>
						Chicken Tandoori_ _ _ _ __Rs 500
						</br></br>
						Paneer Gravy_ _ _ _ _ _ __Rs 400
						</br></br>
						Channa Masala_ _ _ _ _ _ _Rs 450
						</br></br>
						Red Lamb_ _ _ _ _ _ _ _ __Rs 600
						</br></br>
						Malai Kofta_ _ _ _ _ _ _ _Rs 450
						</br></br>
						Chole_ _ _ _ _ _ _ _ _ _ _Rs 450
					</p>
				</div>
			</div>
		</div>
		
		<div class="mySlides fade">
			<div class="numbertext">5 / 7</div>
			<div class="menu">
				<h2 class="title">~Mauritian~</h2>
				<img src="images/fish vindaye.JPG" alt="mauritian" style="width:600px;height:550px;">
				<div class="menu-list">
					<p class="p1">
						Fish Curry with Eggplant__Rs 500
						</br></br>
						Bol Renverser_ _ _ _ _ _ _Rs 400
						</br></br>
						Chicken Kalia_ _ _ _ _ _ _Rs 450
						</br></br>
						Fish Vindaye_ _ _ _ _ _ __Rs 500
						</br></br>
						Chicken Briyani_ _ _ _ _ _Rs 200
						</br></br>
						Fried Rice_ _ _ _ _ _ _ __Rs 200
						</br></br>
						Fried Noodles_ _ _ _ _ _ _Rs 200
					</p>
				</div>
			</div>
		</div>
		
		<div class="mySlides fade">
			<div class="numbertext">6 / 7</div>
			<div class="menu">
				<h2 class="title">~Chinese~</h2>
				<img src="images/sichuan pork.JPG" alt="chinese" style="width:600px;height:550px;">
				<div class="menu-list">
					<p class="p1">
						Sweet and sour pork_ _ _ _Rs 500
						</br></br>
						Perking Duck_ _ _ _ _ _ __Rs 450
						</br></br>
						Braised Pork_ _ _ _ _ _ __Rs 500
						</br></br>
						Sichuan Pork_ _ _ _ _ _ __Rs 550
						</br></br>
						Kung Pao Chicken_ _ _ _ __Rs 500
					</p>
				</div>
			</div>
		</div>
		
		<div class="mySlides fade">
			<div class="numbertext">7 / 7</div>
			<div class="menu">
				<h2 class="title">~Dessert~</h2>
				<img src="images/chocolate mousse.JPG" alt="dessert" style="width:600px;height:550px;">
				<div class="menu-list">
					<p class="p1">
						Ice Cream_ _ _ _ _ _ _ _ _Rs 100
						</br></br>
						Tiramisu_ _ _ _ _ _ _ _ __Rs 200
						</br></br>
						Rasmalai_ _ _ _ _ _ _ _ __Rs 200
						</br></br>
						Rasgulla_ _ _ _ _ _ _ _ __Rs 150
						</br></br>
						Creme Brulee_ _ _ _ _ _ __Rs 150
						</br></br>
						Mousse Chocolate_ _ _ _ __Rs 150
					</p>
				</div>
			</div>
		</div>
		
		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>
		
	</div>
	
	<div style="text-align:center">
		<span class="dot" onclick="currentSlide(1)"></span>
		<span class="dot" onclick="currentSlide(2)"></span>
		<span class="dot" onclick="currentSlide(3)"></span>
		<span class="dot" onclick="currentSlide(4)"></span>
		<span class="dot" onclick="currentSlide(5)"></span>
		<span class="dot" onclick="currentSlide(6)"></span>
		<span class="dot" onclick="currentSlide(7)"></span>
	</div>
	
	<script>
		var slideIndex = 1;
		showSlides(slideIndex);
		
		function plusSlides(n){
			showSlides(slideIndex += n);
		}
		
		function currentSlide(n){
			showSlides(slideIndex = n);
		}
		
		function showSlides(n){
			var i;
			var slides = document.getElementsByClassName("mySlides");
			var dots = document.getElementsByClassName("dot");
			if (n > slides.length)
			{
				slideIndex = 1
			}
			if (n < 1)
			{
				slideIndex = slides.length
			}
			for (i = 0; i < slides.length; i++){
				slides[i].style.display = "none";
			}
			for (i = 0; i < dots.length; i++){
				dots[i].className = dots[i].className.replace(" active","");
			}
			slides[slideIndex - 1].style.display = "block";
			dots[slideIndex - 1].className += " active";
		}
	</script>
	
</body>
</html>