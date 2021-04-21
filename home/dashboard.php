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
			
			<h1 class="store-head">Dashboard</h1>
			<br><br><br><br><br><br>
			
		</div>


	</div> <!-- first section wrapper -->
	<br>
	<div class="container">
		<div class="row">
			
			<div class="col-md-12">
			
				<form method="POST" enctype="multipart/form-data">
					  <div class="form-group">
					    <h4>Title of notice</h4>
					    <input type="text" class="form-control" name="title" placeholder="Enter title of notice" required="true">
					  </div>
					  <div class="form-group">
   						 <h4>Notice</h4>
    					 <textarea class="form-control" name="message" placeholder="Enter entire notice" required="true" rows="3"></textarea>
  					  </div>
					  <div class="form-group">
					    <h4>Date</h4>
					    <input type="date" class="form-control" name="date" required="true">
					  </div>
					  <div class="form-group">
					    <h4>Informed by</h4>
					    <input type="text" class="form-control" name="teacher_name" placeholder="Enter name of teacher" required="true">
					  </div>
					  <div class="form-group">
					    <h4>Designation</h4>
					    <input type="text" class="form-control" name="designation" placeholder="Enter designation of the informing teacher" required="true">
					  </div>
					  <div class="form-group">
					    <h4>Reference</h4>
					    <input type="text" class="form-control" name="web-link" placeholder="Enter the reference link (eg - https://www.website.com)">
					  </div>
					  <br>
					  <button type="submit" name="submit" class="btn btn-primary" style="background-color: #041e42;">Post this notice</button>
					  <br><br><br><br>
				</form>

			</div>

		</div>
	</div>

		<?php
		if(isset($_POST['submit'])) {

			$title = $_POST['title'];
			$message = $_POST['message'];
			$date = $_POST['date'];
			$teacher_name = $_POST['teacher_name'];
			$designation = $_POST['designation'];
			$web_link = $_POST['web-link'];
			

			$query = "INSERT INTO `dashboard` (`title`,`message`,`date`,`teacher-name`,`designation`,`ref-link`) VALUES ('$title','$message','$date','$teacher_name','$designation','$web_link')";
			$insert = mysqli_query($con, $query); 

			if($insert) {
				echo "<script>
						alert('Notice sent successfully');
						
					</script>";
			}
			else {
				echo "<script>
						alert('Failed');
						
					</script>";
				echo "Error: " . $con->error;
			}
		}
	?>
	
	
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>