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
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<style>img[alt="www.000webhost.com"]{display:none;}</style>
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" action="user_data.php" method="POST" enctype="multipart/form-data">
					<span class="login100-form-title p-b-49">
						Signup
					</span>

					<div class="wrap-input100 m-b-23">
						<i class="fa fa-user" aria-hidden="true"></i><span class="label-input100">Name</span>
						<input class="input100" type="text" name="name" placeholder="Enter your name" required="true">
					</div>

					<div class="wrap-input100">
						<i class="fa fa-mobile" aria-hidden="true" style="font-size: 22px;"></i><span class="label-input100">Contact no.</span>
						<input class="input100" type="text" name="contact" placeholder="Enter your contact no." required="true">
					</div>
					<br>
					<div class="wrap-input100">
						<i class="fa fa-university" aria-hidden="true"></i><span class="label-input100">College name</span>
						<input class="input100" type="text" name="college" placeholder="Enter your college name" required="true">
					</div>
					<br>
					<div class="wrap-input100">
						<i class="fa fa-calendar" aria-hidden="true"></i><span class="label-input100">Date of birth</span>
						<input class="input100" type="date" name="dob" placeholder="Enter your DOB">
					</div>
					<br>
					<div class="wrap-input100">
						<i class="fa fa-id-card" aria-hidden="true"></i><span class="label-input100">Roll no</span>
						<input class="input100" type="text" name="rollno" placeholder="Enter your roll no.">
					</div>
					<br>
					<div class="wrap-input100 m-b-23">
						<i class="fa fa-envelope" aria-hidden="true"></i><span class="label-input100">E-mail id</span>
						<input class="input100" type="text" name="email" placeholder="Enter your e-mail id" required="true">
					</div>
					<!-- image -->
					<i class="fa fa-photo" aria-hidden="true"></i><span class="label-input100">Photograph</span>
					<br>
					<input type="file"  accept="image/*" name="img" id="file"  onchange="loadFile(event)" style="display: none;" required="true">
					<label for="file" class="btn btn-primary m-0 rounded-pill px-4 label-input100" style="color: white; background-color: #041e42;"> <i class="fa fa-cloud-upload mr-2"></i>Upload Photograph</label>
					<br><br>
					<p><img id="output" width="200" /></p>
					<!-- image -->
					<br>
					<div class="wrap-input100">
						<i class="fa fa-unlock-alt" aria-hidden="true"></i><span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Enter your password" required="true">
					</div>
					<br><br>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" name="submit">
								Register
							</button>
						</div>
					</div>
					
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	<script>
		var loadFile = function(event) {
			var image = document.getElementById('output');
			image.src = URL.createObjectURL(event.target.files[0]);
		};
	</script>
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