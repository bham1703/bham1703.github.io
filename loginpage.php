<?php
	session_start();
	
	session_destroy();
?>

<!DOCTYPE html>
 <html lang="en">
	<head>
		<title>Login-in Form</title>
		<link rel = "stylesheet" type = "text/css" href = "loginpage.css" />
		<link rel="shorcut icon" type="image/png" href="images/favicon2.png">
		<script>
		
		</script>
	</head>
	<style>
		body, html {
			background-image: url("images/loginbackground.jpg");
			
			background-repeat: no-repeat;
			background-size: 1750px 900px;
			}
		
	</style>
	<body>
	

	
		<div class="formPosi">
			<div class="LogInBox">
				<h1>Log-In Form</h1>
			</div>
			<div class ="main">
				<form id="Log-InForm" action="process.php" method="POST" >
				
					<div class="formContent">
						<p><h3><label>Username:</label>
						<input  class="formContent1" id="user" type="text" name="Username" required ></h3></p>
					</div>
				
					<div class="formContent">
						<p><h3><label>Password:</label>
						<input class="formContent2" id="pass" type="password" name="Password" required ></h3></p>
					</div>
					<p style="text-align:center;">
						Don't have an account?
						<a href="Registration_form.php" style="color:#00e6e6;">Sign Up</a>
					</p>
					
					<div class="formContentX">
						<input class="butn"  type="submit" value="Log-in" name="loginbut">
					</div>
				</form>
			</div>
		</div>
		
		


	</body>
</html>