<?php
	session_start();
	if(!ISSET($_SESSION['Welcomeuser'])){
		header('loginpage.php');
	}
?>

<!DOCTYPE html>
 <html lang="en">
	<head>
		<title>RESERVATION</title>
		<meta name="newport" content="width=device-width, initial-scale=1">
		<link rel = "stylesheet" type = "text/css" href = "HomePage.css" />
		<link rel="shorcut icon" type="image/png" href="images/favicon2.png">
		<script>
			function validate(){
				var name = document.getElementById("name").value;
				var TrimName = name.trim();
				var sname = document.getElementById("sname").value;
				var TrimSName = sname.trim();
				var pnum = document.getElementById("pnum").value;
				var TrimPnum = pnum.trim();
				if(TrimName.length==0) {
					alert("Please enter your name");
					return false;
				}
				if(TrimSName.length==0) {
					alert("Please enter your surname");
					return false;
				}
				if(TrimPnum.length==0) {
					alert("Please enter your phone number");
					return false;
				}
				return true;
			}
		</script>
	</head>
	<body id="reserveBody">
	
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
	
	s
	<div class="formPosi">
		<div class="reserveBox">
			<h1>Reservation</h1>
		</div>
		<div class ="main">
			<form id="ReserveForm" action="#" method="POST" onsubmit="return validate()">
				
				<div class="formContent">
				<p><h3><label>Name:</label>
				<input  class="formContent1" type="text" id="name" placeholder="Name" required></h3></p>
				</div>
				
				<div class="formContent">
				<p><h3><label>Surname:</label>
				<input class="formContent2" type="text" id="sname" placeholder="Surname" required></h3></p>
				</div>
				
				<div class="formContent">
				<p><h3><label>Contact number:</label>
				<input class="formContent3" type="text" id="pnum" placeholder="Number" required></h3></p>
				</div>
				
				<div class="formContent">
				<p><h3><label>Date:<label>
				<input class="formContent4" type="date" required></h3></p>
				</div>
				
				<div class="formContent">
				<p><h3><label>Time:</label>
				<input  class="formContent5" type="time" required></h3></p>
				</div>
				
				<div class="formContent">
					<p><h3><label>Number of persons:<label>
					<select class="formContent6" name="select" id="select" required>
						<option value="1-5">1-5 persons</option>
						<option value="5-10">5-10 persons</option>
						<option value="10-15">10-15 persons</option>
						<option value="15-20">15-20 persons</option>
						<option value="20+">20+ persons</option>
					</select></h3></p>
				</div>
				
				<div class="formContentx">
					<button class="butn" type="submit" form="ReserveForm" value="submit">Reserve</button>
				</div>
			
			</form>
		</div>
		</div>	
			
	</body>
</html>