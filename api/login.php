<?php

include 'connectDb.php';

	if(isset($_POST['btnLogin'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sql ="select * from tbluseraccount where username='".$username."'";
		$result = mysqli_query($connection,$sql);
		$count = mysqli_num_rows($result);
		
		$row = mysqli_fetch_array($result);
		
		if($count== 0){
			echo "<script language='javascript'>
						alert('username not existing.');
				  </script>";
		}else if($row[3] != $password) {
			echo "<script language='javascript'>
						alert('Incorrect password');
				  </script>";
		}else{
			$_SESSION['username']=$row[0];
			header("location: ../dashboard.php");
		}
	}
		
?>