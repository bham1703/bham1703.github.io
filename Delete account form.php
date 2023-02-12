<?php
	session_start();
	if(!ISSET($_SESSION['Welcomeuser'])){
		header('loginpage.php');
	}
?>

<!DOCTYPE html>
 <html en="en">
	<head>
		<title>Login-in Form</title>
		<link rel = "stylesheet" type = "text/css" href = "loginpage.css" />
		<link rel="shorcut icon" type="image/png" href="images/favicon2.png">
		<script>
		
			function validate(){
				if ((validateUsername()== false ) || (validatePassword()== false)) {
					return false;
				}
				return true;
			}
			
			function validateUsername(){
				var u = document.getElementById("user").value;
				var TrimStr = u.trim();
				if(TrimStr.length==0) {
					alert("Please enter your username");
					return false;
				}
				if(u.length < 4) {
					alert("Username is too short..Enter another one");
					return false;
				}
				return true;
			}
			
			function validatePassword(){
				var p = document.getElementById("pass").value;
				var TrimPass = p.trim();
				if(TrimPass.length==0){
					alert("Password is empty...Enter your password");
					return false;
				}
				if(p.length < 4){
					alert("Your password is missing characters...Enter again");
					return false;
				}
				return true;
			}
		</script>
	</head>
	<body>
		<div id=NavBar>
		<ul>
			
			<li id="login"><a href="loginpage.php">LOG IN</a></li>
		</ul>
	</div>
	
		<div class="formPosi">
			<div class="LogInBox">
				<h1>Account Deletion Form</h1>
			</div>
			<div class ="main">
				<form id="Log-InForm" action="ondelete.php" method="POST" onsubmit="return validatePassword()">
				
					<div class="formContent">
						<p><h3><label>Username:</label>
						<input  class="formContent1" id="user" type="text" name="Username" required></h3></p>
					</div>
				
					<div class="formContent">
						<p><h3><label>Password:</label>
						<input class="formContent2" id="pass" type="password" name="Password" required></h3></p>
					</div>
					
					<div class="formContentX">
						<input class="butn"  type="submit" value="Delete">
					</div>
				</form>
			</div>
		</div>
	</body>
</html>