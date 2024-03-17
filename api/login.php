<?php


include 'connectDb.php';

	if(isset($_POST['btnLogin'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sql ="select * from tbluseraccount where username='".$username."'";
		$result = mysqli_query($connection,$sql);
		$count = mysqli_num_rows($result);
		
		$row = mysqli_fetch_array($result);
		
		if ($count == 0) {
			echo "<div style='background-color: #f8d7da; color: #721c24; padding: 10px; border: 1px solid #f5c6cb; border-radius: 5px;'>Username not existing.</div>";
			echo "<script>window.setTimeout(function() {window.location.href = '../login.php';}, 1000);</script>";
		} elseif ($row[3] != $password) {
			echo "<div style='background-color: #f8d7da; color: #721c24; padding: 10px; border: 1px solid #f5c6cb; border-radius: 5px;'>Incorrect password</div>";
			echo "<script>window.setTimeout(function() {window.location.href = '../login.php';}, 1000);</script>";
		
		}else{
			$_SESSION['username']=$row[0];
			header("location: ../dashboard.php");
		}
	}
		
?>
