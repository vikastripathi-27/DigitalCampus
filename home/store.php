<?php
	include '../db_connection.php';
	session_start();
	$user = $_SESSION['user'];
	// echo "$user";
	$sql2 = mysqli_query($con,"SELECT * FROM `users` WHERE `email`='$user'");
	$row2 = mysqli_fetch_array($sql2);
	$name = $row2['name'];
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
	<!-- styling for store, trade, document -->
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
			<br><br>
			<h1 class="store-head">Agnels Stationery store</h1>
			<br>
			<a class="nav-link" href="store-orders-history.php"><h3 class="orders"><i class="fa fa-shopping-bag" aria-hidden="true"></i>&nbsp;All orders</h3></a>
			<br>
			<a class="nav-link" href="store-orders.php"><h3 class="cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Current order</h3></a>
			<br><br>
			
			<!-- item1 -->
			
		</div>


	</div> <!-- first section wrapper -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				

				<!-- item1 -->
				<div>
					<img src="../images/journal.png" class="item-img">
					<h3 class="item">Journal sheets</h3>
					<form style="text-align: center;" method="POST">
						<h3 class="item">Cost = 100/bundle</h3>
						<h3 class="item">No. of bundels</h3>
						<select class="item-quantity" name="journal_sheet">
			                 <option value="0">0</option>
			                 <option value="1">1</option>
			                 <option value="2">2</option>
			                 <option value="3">3</option>
			                 <option value="4">4</option>
			                 <option value="5">5</option>
			            </select>
			            <br><br><br>
			          <!--   <button type="submit" class="btn btn-warning adding-items">Add</button>
					</form>
				</div> -->
				
				<!-- item 2 -->
				<br><br><br>
				<!-- <div> -->
					<img src="../images/files.jpg" class="item-img">
					<h3 class="item">Journal</h3>
					<!-- <form style="text-align: center;"> -->
						<h3 class="item">Cost = 25/file</h3>
						<h3 class="item">No. of files</h3>
						<select class="item-quantity" name="journal">
			                 <option value="0">0</option>
			                 <option value="1">1</option>
			                 <option value="2">2</option>
			                 <option value="3">3</option>
			                 <option value="4">4</option>
			                 <option value="5">5</option>
			            </select>
			            <br><br><br>
<!-- 			            <button type="submit" class="btn btn-warning adding-items">Add</button>
					</form>
				</div> -->

				<!-- item 3 -->
				<br><br><br>
				<!-- <div> -->
					<img src="../images/index.jpg" class="item-img">
					<h3 class="item">Index page</h3>
					<!-- <form style="text-align: center;"> -->
						<h3 class="item">Cost = 5/page</h3>
						<h3 class="item">No. of pages</h3>
						<select class="item-quantity" name="index">
			                 <option value="0">0</option>
			                 <option value="1">1</option>
			                 <option value="2">2</option>
			                 <option value="3">3</option>
			                 <option value="4">4</option>
			                 <option value="5">5</option>
			            </select>
			            <br><br><br>
			           <!--  <button type="submit" class="btn btn-warning adding-items">Add</button>
					</form>
				</div> -->

				<!-- item 4 -->
				<br><br><br>
				<!-- <div> -->
					<img src="../images/graph.png" class="item-img">
					<h3 class="item">Graph paper</h3>
					<!-- <form style="text-align: center;"> -->
						<h3 class="item">Cost = 5/graph paper</h3>
						<h3 class="item">No. of graphs</h3>
						<select class="item-quantity" name="graph">
			                 <option value="0">0</option>
			                 <option value="1">1</option>
			                 <option value="2">2</option>
			                 <option value="3">3</option>
			                 <option value="4">4</option>
			                 <option value="5">5</option>
			            </select>
			            <br><br><br>
			          <!--   <button type="submit" class="btn btn-warning adding-items">Add</button>
					</form>
				</div> -->

				<!-- item 5 -->
				<br><br><br>
				<!-- <div> -->
					<img src="../images/thread.jpg" class="item-img">
					<h3 class="item">Thread</h3>
					<!-- <form style="text-align: center;"> -->
						<h3 class="item">Cost = 5/thread</h3>
						<h3 class="item">No. of threads</h3>
						<select class="item-quantity" name="thread">
			                 <option value="0">0</option>
			                 <option value="1">1</option>
			                 <option value="2">2</option>
			                 <option value="3">3</option>
			                 <option value="4">4</option>
			                 <option value="5">5</option>
			            </select>
			            <br><br><br>
			            <!-- <button type="submit" class="btn btn-warning adding-items">Add</button> -->
					<!-- </form> -->
				

				<!-- item 6 -->
				<br><br><br>
				
					<img src="../images/drawing.jpg" class="item-img">
					<h3 class="item">Drawing sheets</h3>
					<!-- <form style="text-align: center;"> -->
						<h3 class="item">Cost = 20/sheet</h3>
						<h3 class="item">No. of sheets</h3>
						<select class="item-quantity" name="drawing_sheet">
							 <option value="0">0</option>
			                 <option value="1">1</option>
			                 <option value="2">2</option>
			                 <option value="3">3</option>
			                 <option value="4">4</option>
			                 <option value="5">5</option>
			            </select>
			            <br><br><br><br><br>
			            <button type="submit" name="store-add" class="btn btn-primary adding-items" style="background-color: #041e42;">Place order</button>
					</form>
				</div>
				<br><br><br>



			</div>
		</div>
		
	</div>

	<?php

		if(isset($_POST['store-add'])) {

			$sql = mysqli_query($con,"SELECT * FROM `users` WHERE `email`='$user'");
			$row = mysqli_fetch_array($sql);
			$rollno = $row['rollno'];

			$query = mysqli_query($con,"SELECT * FROM `store` WHERE `rollno`='$rollno'");
			if(mysqli_fetch_array($query)) {
				echo "<script>
						alert('Previous order pending ... cannot place this order now');
						window.location.href='store.php';
					</script>";
			}

			else {
				$total = 0;
				$journal_sheet = $_POST['journal_sheet'];
				$journal = $_POST['journal'];
				$thread = $_POST['thread'];
				$index = $_POST['index'];
				$drawing_sheet = $_POST['drawing_sheet'];
				$graph = $_POST['graph'];
				$date = date("d-m-Y");
				$total = ($journal_sheet*100)+($journal*25)+($index*5)+($graph*5)+($thread*5)+($drawing_sheet*20);

				$query2 = "INSERT INTO `store-orders` (`rollno`,`date`,`journal-sheet`,`journal`,`thread`,`index-sheet`,`graph`,`drawing-sheet`,`cost`) VALUES ('$rollno','$date','$journal_sheet','$journal','$thread','$index','$graph','$drawing_sheet','$total')";
				$insert2 = mysqli_query($con, $query2);

				$query = "INSERT INTO `store` (`rollno`,`journal-sheet`,`journal`,`thread`,`index-sheet`,`graph`,`drawing-sheet`,`cost`) VALUES ('$rollno','$journal_sheet','$journal','$thread','$index','$graph','$drawing_sheet','$total')";
				$insert = mysqli_query($con, $query);

				if($insert) {
					echo "<script>
							alert('Order placed');
							window.location.href='store-orders.php';
						</script>";
				}
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