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
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/style-stores.css">
	<link rel="stylesheet" href="css/style-document.css">
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
					<li class="nav-item">
						<a class="nav-link" href="index.php">My Profile</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="document.php">Document Hub <span class="sr-only">(current)</span></a>
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
			$rollno = $row['rollno'];
		?>

		<div class="container fh5co-hero-inner">
			<h4 class="user-acc"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $name;?></h4>
			<br><br>
			<h1>Document Hub</h1>
			<br>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<a href="document.php" class="nav-link"><h2 class="tags">My folders</h2></a>
					</div>
					<div class="col-md-4">
						<a href="document-upload.php" class="nav-link"><h3 class="tags">Upload</h3></a>
					</div>
					<div class="col-md-4">
						<a href="student-dashboard.php" class="nav-link"><h3 class="tags">Dashboard</h3></a>
					</div>
				</div>
			</div>
			<br>
		</div>


	</div> <!-- first section wrapper -->
	<br><br>

	<div class="row">
		<div class="container">
			<div class="col-md-12">
				
		
	<?php
		$q = mysqli_query($con,"SELECT DISTINCT `folder` AS f FROM `documents` WHERE `rollno`='$rollno'");
		$array = array();
		while($r = mysqli_fetch_array($q)) {
			$folder = $r['f'];
			array_push($array, $folder);
		}
		$count = count($array);
		
		for($i=0; $i<$count; $i++) {
	?>
			<h2 class="folder-head"><i class="fa fa-folder" aria-hidden="true"></i>&nbsp;<?php echo($array[$i]); ?></h2>
			<hr>
			<br>
	<?php
			$sql2 = mysqli_query($con,"SELECT * FROM `documents` WHERE (`folder`='$array[$i]' AND `rollno`='$rollno')");
			while($row2 = mysqli_fetch_array($sql2)) {
	?>
				<h3 class="doc-title"><?php echo $row2['title']; ?>&nbsp; <i class="fa fa-file" aria-hidden="true"></i></h3>
	<?php
				$doc_id = $row2['doc_id'];
				$download = $row2['file'];
				$date = $row2['date'];
				//convert to dd-mm-yyyy
				$timestamp = strtotime($date);
				$new_date = date("d-m-Y", $timestamp);
	?>		
			<h5><i class="fa fa-calendar" aria-hidden="true"></i> &nbsp;<?php echo "$new_date" ?></h5>
			<button class='btn btn-primary' style="background-color: #041e42;"><a href='<?php echo"documents/$rollno/$download" ?>' target="_blank" style="color: white;">Download/ View</a></button>
	
				&nbsp;
			<button class="btn btn-primary" style="background-color: #041e42;"><a href="document-delete.php?doc_id=<?php echo "$doc_id"; ?>" style="color: white;">Delete</a></button>
			&nbsp;
			<!-- <button class="btn btn-primary" name="rename">Rename</button> -->
			<br>
	<?php
				echo "<br>";
			}
			echo "<br><br><br>";
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