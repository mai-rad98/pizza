<?php

include 'db_connect.php';
$conn = OpenCon();

$email=mysqli_real_escape_string($conn, $_POST['email']);
		$password=mysqli_real_escape_string($conn, $_POST['password']);
		
		$query="SELECT * FROM customer WHERE email='$email' AND secretCode='$password'";
		$result=mysqli_query($conn, $query);
		$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
		$count=mysqli_num_rows($result);
		
		if($count==1)
		{
			$_SESSION['user_id']=$id;
			header("location: adminlogin.php");
		}
		else
		{
			$error="Lastname and/or Password is invalid";
			echo "<script type=\"text/javascript\">
				window.alert('$error');
				</script>";
		}

?>