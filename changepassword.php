<?php
	session_start();
	if(!isset($_SESSION['Welcomeuser'])){
		header('loginpage.php');
	}
?>

!DOCTYPE html>
<html lang="en">
	<head>
		<title>Register</title>
		<link rel = "stylesheet" type = "text/css" href = "loginpage.css" />
		<link rel="shorcut icon" type="image/png" href="images/favicon2.png">
		<script>
			function validateAll(){
				if ((validatePassword()== false) || (validateConPassword() == false)) {
					return false;
				}
				return true;
			}
			
			function validatePassword(){
				var p = document.getElementById("Npass").value;
				var TrimPass = p.trim();
				if(TrimPass.length == 0){
					alert("Password is empty...Enter a password");
					return false;
				}
				if(p.length < 4){
					alert("Password is too short..Enter another one");
					return false;
				}
				return true;
			}
			
			function validateConPassword(){
				var cp = document.getElementById("cpass").value;
				var p = document.getElementById("Npass").value;
				if (cp == p ){
					return true;
				}
				alert("The password does not match the one above...Please enter again");
				return false;
			}
			
		</script>
		
	</head>
	<body>
	
	
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
			<div class="LogInBox">
				<h1>Change Password</h1>
			</div>
			<div class ="main2">
				<form id="change password Form" action="changepasswordprocess.php" method="POST" onsubmit="return validateAll()" >
				
					<div class="formContent">
						<p><h3><label>Username:<label>
						<input class="formContent4" type="text" id="user" placeholder="Enter Username" name="username" required></h3></p>
					</div>
					
					<div class="formContent">
						<p><h3><label>Old Password:</label>
						<input  class="formContent5" type="password" id="passO" placeholder="Enter Password" name="Opassword" required></h3></p>
					</div>
					
					<div class="formContent">
						<p><h3><label>New Password:</label>
						<input  class="formContent5" type="password" id="Npass" placeholder="Enter Password" name="Npassword" required></h3></p>
					</div>

					<div class="formContent">
						<p><h3><label>Confirm New Password:<label>
						<input type="password" id="cpass" placeholder="Enter password again" class="formContent6" name="cpassword" ></h3></p>
					</div>
				
					<div class="formContentX">
						<input class="butn"  type="submit" value="Change Password" name="change" >
					</div>
				</form>
			</div>
		</div>
	</div>