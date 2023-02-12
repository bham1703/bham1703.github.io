<?php 
	session_start();

	include_once 'DatabaseConnect.php';
	
	if (isset($_POST['loginbut'])){
		
		$Username=$_POST['Username'];
		$Password=$_POST['Password'];
		
		
		$login_valid = false;
        $sql = "SELECT Username,Password FROM register WHERE Username='$Username' AND Password='$Password'";
		
        $result = mysqli_query($conn, $sql);
      

		$num = mysqli_num_rows($result);
		
		if($num==1){
			$_SESSION['Welcomeuser']=$Username;
			header('location:home.php');
		}
		else{
			
			echo '<script>alert(" Invalid username/password. Please try again")
							window.location.href = "loginpage.php";
						</script>';
			}
		}	
	mysqli_close($conn);
?>