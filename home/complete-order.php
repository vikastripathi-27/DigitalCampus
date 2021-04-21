<?php
		include '../db_connection.php';
		session_start();
		$user = $_SESSION['user'];
		$rollno=$_GET['rollno'];
		$query=mysqli_query($con,"DELETE FROM `store` WHERE rollno='$rollno'");
		if($query) {
			echo "<script>
					window.location.href='store-admin.php';
				</script>";
		}
		else {
			echo "error";
		}
?>