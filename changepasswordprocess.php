<html>
	<body>
		<?php
			session_start();
		
			include_once 'DatabaseConnect.php';

			
			if ((isset($_POST['username']))&&(isset($_POST['Opassword']))&&(isset($_POST['Npassword']))){
				$username = $_POST['username'];
				$oldpassword = $_POST['Opassword'];
				$newpassword = $_POST['Npassword'];
				
				
				$sql = "UPDATE register SET Password = '$newpassword' WHERE Username = '$username';";

				$result = mysqli_query($conn, $sql);
				if($result){
					echo '<script>alert(" Password changed successfully. Please log in again")
							window.location.href = "loginpage.php";
						</script>';
				}
				else{
					
					echo '<script>alert(" Invalid user/password. Please try again.")
							window.location.href = "changepassword.php";
						</script>';
					
				}
				
			}
			mysqli_close($conn);
		?>
	</body>