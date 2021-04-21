<?php 
	include 'db_connection.php';
	session_start(); 
?>


<?php
	if(isset($_SESSION['user'])){
	   redirect();
	}
	if(isset($_POST['signup'])) {
		echo "<script>
					window.location.href='signup.php';
			  </script>";
	}
	if(isset($_POST['login'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql = mysqli_query($con,"SELECT * FROM `users` WHERE `email`='$username'");
		$row = mysqli_fetch_array($sql);

		if(($username=="")||($password=="")) {
			echo "<script>alert('Username of password field cannot be empty');</script>";
		}

		else if(($username==$row['email'])&&($password==$row['password'])) {
			// session_start();
			$_SESSION['user'] = $username;
			$_SESSION['pass'] = $password;
			echo "<script>alert('Login successful');</script>";
			echo "<script>
					window.location.href='home/index.php';
			  	  </script>";
		}
		else {
			echo "<script>alert('Login unsuccessful');</script>";
			echo "<script>
					window.location.href='index.php';
			  	  </script>";	
		}
	}
	function redirect() {
	    echo "<script>
					window.location.href='home/index.php';
			  </script>";
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Digital Campus</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<style>img[alt="www.000webhost.com"]{display:none;}</style>
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form" method="POST">
					<span class="login100-form-title p-b-49">
						Login
					</span>

					<div class="wrap-input100">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Type your username">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
					<br>
					<div class="wrap-input100">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					<br>
					<div class="text-right p-t-8 p-b-31">
						<a href="forgot_password.php" style="color: #7c827e;">
							Forgot password?
						</a>
					</div>
					<!-- <br> -->
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" name="login" class="login100-form-btn">
								Login
							</button>
						</div>
					</div>
					<br>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="signup">
								New User? Sign up
							</button>
						</div>
					</div>

					
					</div>
				</form>
			</div>
		</div>
	</div>

	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>

