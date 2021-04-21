<?php
	include '../db_connection.php';
	session_start();
	$user = $_SESSION['user'];
	$sql3 = mysqli_query($con,"SELECT * FROM `users` WHERE `email`='$user'");
	$row3 = mysqli_fetch_array($sql3);
	$name = $row3['name'];
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
	<link rel="stylesheet" href="css/style-trade.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/style-trade.css">
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
					<li class="nav-item">
						<a class="nav-link" href="document.php">Document Hub</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="trade.php">Trading Centre <span class="sr-only">(current)</span></a>
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
	
		<div class="container fh5co-hero-inner">
			<h4 class="user-account"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $name;?></h4>
			<br><br>
			<h3 class="tags"><i class="fa fa-share-square" aria-hidden="true"></i>&nbsp;<b><i>Selling section</i></b></h3> <br><br>
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<a href="trade.php" class="nav-link"><h4 class="tags"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Home</h4></a>
					</div>
					<div class="col-md-3">
						<a href="trade-orders.php" class="nav-link"><h4 class="tags"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Orders</h4></a>
					</div>
					<div class="col-md-3">
						<a href="trade-requests.php" class="nav-link"><h4 class="tags"><i class="fa fa-shopping-basket" aria-hidden="true"></i>&nbsp;Requests</h4></a>
					</div>
					<div class="col-md-3">
						<a href="trade-listed.php" class="nav-link"><h4 class="tags"><i class="fa fa-list-ul" aria-hidden="true"></i>&nbsp;Listed</h4></a>
					</div>
				</div>
			</div>
			<br>
			
		</div>

	</div> <!-- first section wrapper -->
	<br>

	<div class="container">
		<div class="row">
			
			<div class="col-md-12">
			
				<form method="POST" enctype="multipart/form-data">
					  <div class="form-group">
					    <h4><i class="fa fa-text-width" aria-hidden="true"></i>&nbsp;Title</h4>
					    <input type="text" class="form-control" name="title" placeholder="Enter title of item" required="true">
					  </div><br>
					  <div class="form-group">
					    <h4><i class="fa fa-cart-plus" aria-hidden="true"></i>&nbsp;Category</h4>
					    <input type="text" class="form-control" name="category" placeholder="Enter category of item (e.g. electronics, books, etc.)" required="true">
					  </div><br>
					  <div class="form-group">
					    <h4><i class="fa fa-calendar-o" aria-hidden="true"></i>&nbsp;Date of purchase</h4>
					    <input type="date" class="form-control" name="date" required="true">
					  </div><br>
					  <div class="form-group">
					    <h4><i class="fa fa-inr" aria-hidden="true"></i>&nbsp;Purchase price</h4>
					    <input type="text" class="form-control" name="p_price" placeholder="Enter purchase price of the item" required="true">
					  </div><br>
					  <div class="form-group">
					    <h4><i class="fa fa-inr" aria-hidden="true"></i>&nbsp;Selling price</h4>
					    <input type="text" class="form-control" name="s_price" placeholder="Enter selling price of the item" required="true">
					  </div><br>

					  <!-- image -->
						<h4><i class="fa fa-picture-o" aria-hidden="true"></i>&nbsp;Product photograph</h4>
						<input type="file"  accept="image/*" name="img" id="file"  onchange="loadFile(event)" style="display: none;" required="true">
						<label for="file" class="btn btn-primary m-0 rounded-pill px-4 label-input100" style="color: white; background-color: #041e42;"> <i class="fa fa-cloud-upload mr-2"></i>Upload Photograph</label>
						<br><br>
						<p><img id="output" width="200" /></p>
					<!-- image -->
						<br>
					  <button type="submit" name="submit" class="btn btn-primary" style="background-color: #041e42;">Put it for selling</button>
					  <br><br><br><br>
				</form>

				<script>
					var loadFile = function(event) {
						var image = document.getElementById('output');
						image.src = URL.createObjectURL(event.target.files[0]);
					};
				</script>

			</div>

		</div>
	</div>

	<?php
		if(isset($_POST['submit'])) {

			$title = $_POST['title'];
			$category = $_POST['category'];
			$date = $_POST['date'];
			$p_price = $_POST['p_price'];
			$s_price = $_POST['s_price'];
			
			$item_id = rand(1001,100001);

			$img = $_FILES['img']['name'];
			$tmp_name = $_FILES['img']['tmp_name'];
			move_uploaded_file($tmp_name,"images/product-img/".$img);

			$sql = mysqli_query($con,"SELECT * FROM `users` WHERE `email`='$user'");
			$row = mysqli_fetch_array($sql);
			$own_name = $row['name'];
			$rollno = $row['rollno'];
			$contact = $row['contact'];

			$query = "INSERT INTO `trade` (`item_id`,`title`,`category`,`dop`,`og_price`,`sell_price`,`owner_name`,`rollno`,`owner_contact`,`item_img`) VALUES ('$item_id','$title','$category','$date','$p_price','$s_price','$own_name','$rollno','$contact','$img')";
			$insert = mysqli_query($con, $query);  //for trade table

			$status = "Not sold";
			$query2 = "INSERT INTO `listed` (`item_id`,`title`,`category`,`original_price`,`sell_price`,`dop`,`rollno`,`contact`,`image`,`status`) VALUES ('$item_id','$title','$category','$p_price','$s_price','$date','$rollno','$contact','$img','$status')";
			$insert2 = mysqli_query($con, $query2);  // for listed table

			if(($insert)&&($insert2)) {
				echo "<script>
						alert('Successful');
						
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