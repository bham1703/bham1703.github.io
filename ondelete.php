

<html>
	<body>
		<?php
			
			session_start();
	
		
			include_once 'DatabaseConnect.php';

			
			if ((isset($_POST['Username']))&&(isset($_POST['Password']))){
				$username = $_POST['Username'];
				$password = $_POST['Password'];

				$sql = "SELECT Username, Password FROM register WHERE Username= '$username' AND Password = '$password'";
				$result = mysqli_query($conn, $sql);
				$num = mysqli_num_rows($result);

				if($num == 1){

					$sql = "DELETE FROM register WHERE Username= '$username';";

					$result = mysqli_query($conn, $sql);

					if($result){
						echo '<script>alert(" Account deleted successfully. Please register to log in")
							window.location.href = "loginpage.php";
						</script>';
					}else{
						echo '<script>alert(" Invalid username/password. Please try again.")
							window.location.href = "Delete account form.php";
						</script>';
					}

					
				}
			}
			mysqli_close($conn);
		?>
	</body>
</html>