<?php
		include '../db_connection.php';
		session_start();
		$user = $_SESSION['user'];
		$doc_id=$_GET['doc_id'];
		$query=mysqli_query($con,"DELETE FROM `documents` WHERE doc_id='$doc_id'");
		if($query) {
			echo "<script>
					window.location.href='document.php';
				</script>";
		}
		else {
			echo "error";
		}
?>