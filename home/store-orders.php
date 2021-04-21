<?php
	include '../db_connection.php';
	session_start();
	$user = $_SESSION['user'];
	// echo "$user";
	$sql3 = mysqli_query($con,"SELECT * FROM `users` WHERE `email`='$user'");
	$row3 = mysqli_fetch_array($sql3);
	$name = $row3['name'];
	$rollno = $row3['rollno'];
	
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
			<h3 class="store-head" style="color: white;">Current order</h3>
			<br><br><br><br><br>
			<!-- item1 -->
			
		</div>


	</div> <!-- first section wrapper -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
					
				<br>
				<table class="table" border="3">
					
					<tr>
						<th scope="col" class="row-item">Item Name</th>
						<th scope="col" class="row-item">Quantity</th>
						<th scope="col" class="row-item">Cost</th>
					</tr>
					<?php
						$sql = mysqli_query($con,"SELECT * FROM `users` WHERE `email`='$user'");
						$row = mysqli_fetch_array($sql);
						$rollno = $row['rollno'];

						$sql2 = mysqli_query($con,"SELECT * FROM `store` WHERE `rollno`='$rollno'");
						$row2 = mysqli_fetch_array($sql2);	

					?>
					<tr>
						<td scope="col" class="row-item"><?php echo "Journal sheet" ?></td>
						<td scope="col" class="row-item"><?php echo $row2['journal-sheet']; ?></td>
						<td scope="col" class="row-item"><?php echo ($row2['journal-sheet']*100); ?></td>
					</tr>
					<tr>
						<td scope="col" class="row-item"><?php echo "Journal" ?></td>
						<td scope="col" class="row-item"><?php echo $row2['journal']; ?></td>
						<td scope="col" class="row-item"><?php echo ($row2['journal']*25); ?></td>
					</tr>
					<tr>
						<td scope="col" class="row-item"><?php echo "Index sheet" ?></td>
						<td scope="col" class="row-item"><?php echo $row2['index-sheet']; ?></td>
						<td scope="col" class="row-item"><?php echo ($row2['index-sheet']*5); ?></td>
					</tr>
					<tr>
						<td scope="col" class="row-item"><?php echo "Thread" ?></td>
						<td scope="col" class="row-item"><?php echo $row2['thread']; ?></td>
						<td scope="col" class="row-item"><?php echo ($row2['thread']*5); ?></td>
					</tr>
					<tr>
						<td scope="col" class="row-item"><?php echo "Graph" ?></td>
						<td scope="col" class="row-item"><?php echo $row2['graph']; ?></td>
						<td scope="col" class="row-item"><?php echo ($row2['graph']*5); ?></td>
					</tr>
					<tr>
						<td scope="col" class="row-item"><?php echo "Drawing sheet" ?></td>
						<td scope="col" class="row-item"><?php echo $row2['drawing-sheet']; ?></td>
						<td scope="col" class="row-item"><?php echo ($row2['drawing-sheet']*20); ?></td>
					</tr>
				<table>
					<br>
					<h2 style="text-align: center;">Total cost = <?php echo $row2['cost'];?></h2>
					<br>
					<form method="POST">
						<?php
							$sql4 = mysqli_query($con,"SELECT COUNT(`id`) AS count_id FROM `store` WHERE `rollno`='$rollno'");
							$row4 = mysqli_fetch_array($sql4);
							$id_temp  = $row4['count_id'];
							if($id_temp) {
						?>
						<button type="submit" class="btn btn-danger cancel-items" name="cancel">Cancel order X</button>
						<br>
						<br>
						<?php

							}
						?>
						
					</form>
					<?php
						if(isset($_POST['cancel'])) {

							$sql = mysqli_query($con,"SELECT MAX(id) AS max FROM `store-orders` WHERE `rollno`='$rollno'");
							$row = mysqli_fetch_array($sql);
							$id = $row['max'];
							$sql2 = "DELETE FROM `store-orders` WHERE `id`='$id'";
							$del1 = mysqli_query($con, $sql2);

							$sql3 = "DELETE FROM `store` WHERE `rollno`='$rollno'";
							$del2 = mysqli_query($con, $sql3);

							if(($del1)&&($del2)) {
								echo "<script>
										alert('Order cancelled');
									  </script>";
								echo "<script>
										window.location.href='store-orders.php';
			  						  </script>";
							}
						}
					?>
					
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