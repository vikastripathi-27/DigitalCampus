<?php
	include '../db_connection.php';
	session_start();
	$user = $_SESSION['user'];
	// echo "$user";
	
?>
<?php
	if(isset($_POST['logout'])) {
		echo "<script>
					window.location.href='../index.php';
			  </script>";
		session_destroy();
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Digital Campus</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/style-store.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/style-stores.css">
	<style>img[alt="www.000webhost.com"]{display:none;}</style>
</head>
<body>
	<div id="fh5co-hero-wrapper">
		<nav class="container navbar navbar-expand-lg main-navbar-nav navbar-light">
			<a class="navbar-brand" href="">DIGITAL CAMPUS</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav nav-items-center ml-auto mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">My Profile <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="document.php">Document Hub</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="trade.php">Trading Centre</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="store.php">Agnels Store</a>
					</li>
					<li class="nav-item">
						<form method="POST">
							<button class="nav-link btn-log" name="logout"><a>Logout</a></button>
						</form>
		
					</li>
				</ul>
			</div>
		</nav>

		<?php
			$sql = mysqli_query($con,"SELECT * FROM `users` WHERE `email`='$user'");
			$row = mysqli_fetch_array($sql);
			$name = $row['name'];
		?>

		<div class="container fh5co-hero-inner">
			<h4 class="user-acc"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $name;?></h4>
			<br>
			<h1>My Profile</h1>
			<br>
		</div>


	</div> <!-- first section wrapper -->

	<br>
	<div class="row">
		<div class="container">
			<div class="col-md-12">
					<div class="profile">
						<img class="profile-img" src="../images/user_img/<?php echo $row['photo']; ?>">
						<br><br>
						<h3><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp; Name : <?php echo $row['name'];  ?> </h3><br>
						<h3><i class="fa fa-mobile" aria-hidden="true"></i>&nbsp;&nbsp; Contact : <?php echo $row['contact'];  ?> </h3><br>
						<h3><i class="fa fa-university" aria-hidden="true"></i>&nbsp;&nbsp; College : <?php echo $row['college'];  ?> </h3><br>
						<?php
							$date = $row['dob'];
							$timestamp = strtotime($date);
							$new_date = date("d-m-Y", $timestamp);
						?>
						<h3><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;&nbsp; DOB : <?php echo "$new_date";  ?> </h3><br>
						<h3><i class="fa fa-id-card" aria-hidden="true"></i>&nbsp;&nbsp; Roll no. : <?php echo $row['rollno'];  ?> </h3><br>
						<h3><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp; E-mail id : <?php echo $row['email'];  ?> </h3><br><br>
					</div>
			</div>
		</div>
	</div>
	

	
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>