<?php
	include 'db_connection.php';
	if(isset($_POST['submit'])) {

		$name = $_POST['name'];
		$contact = $_POST['contact'];
		$college = $_POST['college'];
		$dob = $_POST['dob'];
		$rollno = $_POST['rollno'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		$img = $_FILES['img']['name'];
		$tmp_name = $_FILES['img']['tmp_name'];
		move_uploaded_file($tmp_name,"images/user_img/".$img);

		mkdir("home/documents/$rollno");

		$query = "INSERT INTO `users` (`name`,`contact`,`college`,`dob`,`rollno`,`email`,`photo`,`password`) VALUES ('$name','$contact','$college','$dob','$rollno','$email','$img','$password')";
		$insert = mysqli_query($con, $query);

		if($insert) {
			echo "<script>
					alert('Registration successful');
					window.location.href='index.php';
				</script>";
		}
		else {
			echo "<script>
					alert('Registration failed');
					window.location.href='signup.php';
				</script>";
			echo "Error: " . $con->error;
		}
	}
?>