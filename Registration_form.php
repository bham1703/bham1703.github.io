

	<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Register</title>
		<link rel = "stylesheet" type = "text/css" href = "loginpage.css" />
		<link rel="shorcut icon" type="image/png" href="images/favicon2.png">
		
		<script>
			function validateAll(){
				if ((validateUsername()== false ) || (validatePassword()== false) || (validateConPassword() == false)) {
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
				if(u.length < 3) {
					alert("Username is too short..Enter another one");
					return false;
				}
				return true;
			}
			
			function validatePassword(){
				var p = document.getElementById("pass").value;
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
				var Cp = document.getElementById("cpass").value;
				var p = document.getElementById("pass").value;
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
			
			<li id="login"><a href="loginpage.php">LOG IN</a></li>
		</ul>
	</div>
	
	
		<div class="formPosi">
			<div class="LogInBox">
				<h1>Registration Form</h1>
			</div>
			<div class ="main2">
				<form id="Log-InForm" action="" method="POST" onsubmit="return validateAll()">
				
				
					<div class="formContent">
						<p><h3><label>Name:</label>
						<input  class="formContent1" type="text" placeholder="Enter Name" name="name" required></h3></p>
					</div>
					
					<div class="formContent">
						<p><h3><label>Surname:</label>
						<input class="formContent2" type="text" placeholder="Enter Surname" name="surname" required></h3></p>
					</div>
				
					<div class="formContent">
						<p><h3><label>E-mail:</label>
						<input class="formContent3" type="email" placeholder="Enter Email" name="email"  required></h3></p>
					</div>
				
					<div class="formContent">
						<p><h3><label>Username:<label>
						<input class="formContent4" type="text" id="user" placeholder="Enter Username" name="username" required></h3></p>
					</div>
					
					<div class="formContent">
						<p><h3><label>Password:</label>
						<input  class="formContent5" type="password" id="pass" placeholder="Enter Password" name="password" required></h3></p>
					</div>
				
					<div class="formContent">
						<p><h3><label>Confirm Password:<label>
						<input type="password" id="cpass" placeholder="Enter password again" class="formContent6" name="confirmpassword" ></h3></p>
					</div>
				
					<div class="formContentX">
						<input class="butn"  type="submit" value="Register" name="registerbut" >
					</div>
				</form>
				<?php
					session_start();
					
					include_once 'DatabaseConnect.php';
					
					if(isset($_POST['registerbut']))
					{	 
						$name = $_POST['name'];
						$surname = $_POST['surname'];
						$username = $_POST['username'];
						$email = $_POST['email'];
						$password = $_POST['password'];
						$confirmpassword = $_POST['confirmpassword'];
						
						
						$sql = "INSERT INTO register (Name,Surname,Email,Username,Password)
						VALUES ('$name','$surname','$email','$username','$password')";
						
						$result = mysqli_query($conn, $sql);
						
						 if($result)
						 {echo '<script>alert(" Registration Successful. Please login to enter website.")
							window.location.href = "loginpage.php";
						</script>';
						 }
						 else
						 {
							 echo '<script>alert(" Registration failed. User email already exists")
							window.location.href = "Registration_form.php";
						</script>';
						 }
					}
					mysqli_close($conn);
					?>
			</div>
		</div>
	</div>	
	</body>
</html>