<?php
	include '../db_connection.php';
	session_start();
	$user = $_SESSION['user'];
	// echo "$user";
	$sql3 = mysqli_query($con,"SELECT * FROM `users` WHERE `email`='$user'");
	$row3 = mysqli_fetch_array($sql3);
	$name = $row3['name'];
	$roll = $row3['rollno'];
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
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
	
	<style>img[alt="www.000webhost.com"]{display:none;}</style>
	<link rel="stylesheet" type="text/css" href="css/style-stores.css">
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
					<li class="nav-item">
						<a class="nav-link" href="index.php">My Profile</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="document.php">Document Hub</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="trade.php">Trading Centre</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="store.php">Agnels Store<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<form method="POST">
							<button class="nav-link btn-log" name="logout"><a>Logout</a></button>
						</form>
					</li>
				</ul>
			</div>
		</nav>

		<div class="container fh5co-hero-inner">
			<h4 class="user-acc"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $name;?></h4>
			<br>
			<h1 class="store-head">Agnels Stationery store</h1>
			<br><br><br><br><br>
			<h3 class="store-head" style="color: white;">My orders</h3>
			<br><br><br><br><br>
			<!-- item1 -->
			
		</div>


	</div> <!-- first section wrapper -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
					
				<br>
				<div style="overflow-x:auto;">
				<table class="table" border="3">
					
					<tr>
						<th scope="col" class="row-item">Sr. no</th>
						<th scope="col" class="row-item">Date</th>
						<th scope="col" class="row-item">Journal sheet</th>
						<th scope="col" class="row-item">Journal</th>
						<th scope="col" class="row-item">Index sheet</th>
						<th scope="col" class="row-item">Thread</th>
						<th scope="col" class="row-item">Graph</th>
						<th scope="col" class="row-item">Drawing sheet</th>
						<th scope="col" class="row-item">Total cost</th>
					</tr>
					<?php
						$no = 0;
						$sql = mysqli_query($con,"SELECT * FROM `store-orders` WHERE `rollno`=$roll");
						while($row=mysqli_fetch_array($sql))
						{
							$no=$no+1;
					?>	
					<tr>
						<td scope="col" class="row-item"><?php echo $no; ?></td>
						<td scope="col" class="row-item"><?php echo $row['date']; ?></td>
						<td scope="col" class="row-item"><?php echo $row['journal-sheet']; ?></td>
						<td scope="col" class="row-item"><?php echo $row['journal']; ?></td>
						<td scope="col" class="row-item"><?php echo $row['index-sheet']; ?></td>
						<td scope="col" class="row-item"><?php echo $row['thread']; ?></td>
						<td scope="col" class="row-item"><?php echo $row['graph']; ?></td>
						<td scope="col" class="row-item"><?php echo $row['drawing-sheet']; ?></td>
						<td scope="col" class="row-item"><?php echo $row['cost']; ?></td>
					</tr>
					<?php }?>
				</table>
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