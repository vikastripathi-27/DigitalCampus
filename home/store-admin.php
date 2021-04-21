<?php
	include '../db_connection.php';
	
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
	
	<link rel="stylesheet" type="text/css" href="css/style-stores.css">
	<style>img[alt="www.000webhost.com"]{display:none;}</style>
</head>
<body>

	<div id="fh5co-hero-wrapper">
		<nav class="container navbar navbar-expand-lg main-navbar-nav navbar-light">
			<a class="navbar-brand" href="">DIGITAL CAMPUS</a>
		</nav>

		<div class="container fh5co-hero-inner">
			
			<h4 class="user-acc"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Mr. Aman</h4>
			<br>
			<h1 class="store-head">Agnels Stationery store</h1>
			<br><br><br><br><br><br>
			
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
						<th scope="col" class="row-item">Rollno</th>
						<th scope="col" class="row-item">Journal sheet</th>
						<th scope="col" class="row-item">Journal</th>
						<th scope="col" class="row-item">Index sheet</th>
						<th scope="col" class="row-item">Thread</th>
						<th scope="col" class="row-item">Graph</th>
						<th scope="col" class="row-item">Drawing sheet</th>
						<th scope="col" class="row-item">Total cost</th>
						<th scope="col" class="row-item">Done</th>
					</tr>
					<?php
						$no = 0;
						$sql = mysqli_query($con,"SELECT * FROM `store`");
						while($row=mysqli_fetch_array($sql))
						{
							$no=$no+1;
					?>	
					<tr>
						<td scope="col" class="row-item"><?php echo $no; ?></td>
						<td scope="col" class="row-item"><?php echo $row['rollno']; ?></td>
						<td scope="col" class="row-item"><?php echo $row['journal-sheet']; ?></td>
						<td scope="col" class="row-item"><?php echo $row['journal']; ?></td>
						<td scope="col" class="row-item"><?php echo $row['index-sheet']; ?></td>
						<td scope="col" class="row-item"><?php echo $row['thread']; ?></td>
						<td scope="col" class="row-item"><?php echo $row['graph']; ?></td>
						<td scope="col" class="row-item"><?php echo $row['drawing-sheet']; ?></td>
						<td scope="col" class="row-item"><?php echo $row['cost']; ?></td>
						<td scope="col" class="row-item"><button class="btn btn-primary" style="background-color: #041e42;"><a href="complete-order.php?rollno=<?php echo $row['rollno']; ?>" style="color: white;">Completed</a></button></td>
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