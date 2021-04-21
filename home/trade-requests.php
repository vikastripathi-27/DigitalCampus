<?php
	include '../db_connection.php';
	session_start();
	$user = $_SESSION['user'];
	$sql2 = mysqli_query($con,"SELECT * FROM `users` WHERE `email`='$user'");
	$row2 = mysqli_fetch_array($sql2);
	$roll = $row2['rollno'];
	$name = $row2['name'];
	// echo "$roll";
?>
<?php
	if(isset($_POST['logout'])) {
		echo "<script>
					window.location.href='../index.php';
			  </script>";
		session_destroy();
	}
?>

<?php

	if(isset($_POST['approve'])) {
		
		$item_id = $_POST['approve'];

		$sql3 = mysqli_query($con,"SELECT * FROM `request` WHERE `item_id`='$item_id'");
		$row3 = mysqli_fetch_array($sql3);

		$title = $row3['title'];	
		$category = $row3['category'];
		$date = $row3['dop'];
		$s_price = $row3['sell_price'];
		$own_name = $row3['owner_name'];
		$item_img = $row3['item_image'];
		$purchase_roll = $row3['purchase_rollno'];
		$purchase_contact= $row3['purchase_contact'];
		
		$insert2 = mysqli_query($con,"UPDATE listed SET `status`='Sold' WHERE `item_id`='$item_id'");

		$query = "INSERT INTO `orders` (`item_id`,`title`,`category`,`price`,`item-img`,`pur_rollno`,`own_name`) VALUES ('$item_id','$title','$category','$s_price','$item_img','$purchase_roll','$own_name')";
			
			$insert = mysqli_query($con, $query);
			
			if(($insert)&&($insert2)) {
				echo "<script>
						alert('Approved');
					</script>";
				$delete = mysqli_query($con,"DELETE FROM `request` WHERE `item_id`='$item_id'");
			}
			else {
				echo "error".$con->error;			
			}
		
	}

	if(isset($_POST['reject'])) {
		
		$item_id = $_POST['reject'];

		$sql3 = mysqli_query($con,"SELECT * FROM `request` WHERE `item_id`='$item_id'");
		$row3 = mysqli_fetch_array($sql3);

		$title = $row3['title'];	
		$category = $row3['category'];
		$date = $row3['dop'];
		$o_price = $row3['og_price'];
		$s_price = $row3['sell_price'];
		$own_name = $row3['owner_name'];
		$own_roll = $row3['rollno'];
		$own_contact = $row3['owner_contact'];
		$item_img = $row3['item_image'];
		$purchase_roll = $row3['purchase_rollno'];
		$purchase_contact= $row3['purchase_contact'];

		$query = "INSERT INTO `trade` (`item_id`,`title`,`category`,`dop`,`og_price`,`sell_price`,`owner_name`,`rollno`,`owner_contact`,`item_img`) VALUES ('$item_id','$title','$category','$date','$o_price','$s_price','$own_name','$own_roll','$own_contact','$item_img')";
			
			$insert = mysqli_query($con, $query);
			
			if($insert) {
				echo "<script>
						alert('Rejected');
					</script>";
				$delete = mysqli_query($con,"DELETE FROM `request` WHERE `item_id`='$item_id'");
			}
			else {
				echo "error".$con->error;			
			}
		
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
		<h3 class="tags"><i class="fa fa-shopping-basket" aria-hidden="true"></i>&nbsp;<b><i>Requests section</i></b></h3> <br><br>
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<a href="trade.php" class="nav-link"><h4 class="tags"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Home</h4></a>
					</div>
					<div class="col-md-3">
						<a href="trade-sell.php" class="nav-link"><h4 class="tags"><i class="fa fa-share-square" aria-hidden="true"></i>&nbspSell</h4></a>
					</div>
					<div class="col-md-3">
						<a href="trade-orders.php" class="nav-link"><h4 class="tags"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Orders</h4></a>
					</div>
					<div class="col-md-3">
						<a href="trade-listed.php" class="nav-link"><h4 class="tags"><i class="fa fa-list-ul" aria-hidden="true"></i>&nbsp;Listed</h4></a>
					</div>
				</div>
			</div>
			<br>
			
		</div>

	</div> <!-- first section wrapper -->
	<br><br>
	<div class="container">
		<div class="row">
			
			<div class="col-md-12">
				<?php

					$sql = mysqli_query($con,"SELECT * FROM `request` WHERE `rollno`='$roll'");
						while($row=mysqli_fetch_array($sql))
						{

				?>
				<br>
				<img style="float: right; height: 260px; width: 260px; margin-left: 35px; border: 1px solid black;" src="images/product-img/<?php echo $row['item_image'] ?>">
				<br>
				<form method="POST">
			
					<h5><i class="fa fa-text-width" aria-hidden="true"></i>&nbsp;Title : <?php echo $row['title']; ?></h5>
					<h5><i class="fa fa-cart-plus" aria-hidden="true"></i>&nbsp;Category : <?php echo $row['category']; ?></h5>
					<h5><i class="fa fa-calendar-o" aria-hidden="true"></i>&nbsp;Date : <?php echo $row['dop']; ?></h5>
					<h5><i class="fa fa-inr" aria-hidden="true"></i>&nbsp;Purchase price : <?php echo $row['og_price']; ?></h5>
					<h5><i class="fa fa-inr" aria-hidden="true"></i>&nbsp;Selling price : <?php echo $row['sell_price']; ?></h5>
					<h5><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Purchaser's name : <?php echo $row['purchase_name']; ?></h5>
					<h5><i class="fa fa-phone-square" aria-hidden="true"></i>&nbsp;Purchaser's contact no. : <?php echo $row['purchase_contact']; ?></h5>
					<br>
					<button class="nav-link btn btn-primary" style="float:left; background-color: #041e42;" name="approve" value="<?php echo $row['item_id']; ?>"><a>Approve</a></button>
					<button class="nav-link btn btn-danger" style="margin-left: 150px; background-color: ;" name="reject" value="<?php echo $row['item_id']; ?>"><a>Reject</a></button>
				</form>
				<br><br>
				<hr><br>
				<?php }?>
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