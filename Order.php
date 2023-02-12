<?php
	session_start();
	if(!ISSET($_SESSION['Welcomeuser'])){
		header('loginpage.php');
	}
?>

<!DOCTYPE html>
 <html lang="en">
	<head>
		<title>Order</title>
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
				var mnum = document.getElementById("mnum").value;
				var TrimMnum = Mnum.trim();
				var address = document.getElementById("address").value;
				var TrimAdd = address.trim();
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
				if(TrimMnum.length==0) {
					alert("Please enter your mobile number");
					return false;
				}
				if(TrimAdd.length==0) {
					alert("Please enter your address");
					return false;
				}
				return true;
			}
		</script>
	</head>
	<body id="orderBody">
	
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
	<div class="formPosi">
		<div class="orderBox">
			<h1>Order</h1>
		</div>
		<div class ="main1">
			<form id="OrderForm" action="#" method="POST" onsubmit="return validate()">
				
				<div class="formContent">
					<p><h3><label>Name:</label>
					<input  class="formContent1" type="text" id="name" placeholder="Name" required></h3></p>
				</div>
				
				<div class="formContent">
					<p><h3><label>Surname:</label>
					<input class="formContent2" type="text" id="sname" placeholder="Surname" required></h3></p>
				</div>
				
				<div class="formContent">
					<p><h3><label>Phone number:</label>
					<input class="formContent3" type="tel" id="pnum" placeholder="Tel Number" required></h3></p>
				</div>
				
				<div class="formContent">
					<p><h3><label>Mobile Number:<label>
					<input class="formContent4" type="tel" id="mnum" placeholder="Mob Number" required></h3></p>
				</div>
				
				<div class="formContent">
					<p><h3><label>Address:</label>
					<input  class="formContent5" type="text" id="address" placeholder="Address" required></h3></p>
				</div>
				
				<div class="formContent">
					<p><h3><label>Starters:<label>
					<input type="text" placeholder="<Menu Name><Quantity>" class="formContent60" ></h3></p>
				</div>
				<br/><br/><br/><br/><br/>
				<div class="formContent">
					<p><h3><label>Main Course:</label>
					<input type="text" placeholder="<Menu Name><Quantity>" class="formContent7" ></h3></p>
				</div>
				<br/><br/><br/><br/><br/>
				<div class="formContent">
					<p><h3><label>Dessert:</label>
					<input type="text" placeholder="<Menu Name><Quantity>" class="formContent8"></h3></p>
				</div>
				<br/><br/><br/><br/><br/>
				<div class="formContent">
					<p><h3><label>Drinks:</label>
					<input type="text" placeholder="<Menu Name><Quantity>" class="formContent9"></h3></p>
				</div>
				<br/><br/><br/><br/><br/>
				<div class="formContent">
					<p><h3>In which way do u want to receive your food?</h3></p>
					<input type="radio" id="pickup" name="takeaway" value="Pick-up">
					<label for="pickup">Pick-Up</label>
					<input type="radio" id="delivery" name="takeaway" value="Home-Delivery">
					<label for="delivery">Home-Delivery</label>
				</div>
				<div class="formContentX">
					<button class="butn1" type="submit" form="OrderForm" value="submit">Submit</button>
				</div>
			
			</form>
			
		</div>
		
	</div>	
		
	</body>
</html>