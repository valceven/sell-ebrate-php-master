<?php
include 'connectDb.php';

	if(isset($_POST['btnRegister'])){		
		//retrieve data from form and save the value to a variable
		//for tbluserprofile
		$firstname=$_POST['firstname'];		
		$lastname=$_POST['lastname'];
		
		//for tbluseraccount
		$email=$_POST['email'];		
		$username=$_POST['username'];
		$password=$_POST['password'];
		
		//save data to tbluserprofile			
		$sql1 ="Insert into tbluserprofile(firstname,lastname) values('".$firstname."','".$lastname."')";
		mysqli_query($connection,$sql1);
		
		//Check tbluseraccount if username is already existing. Save info if false. Prompt msg if true.
		$sql2 ="Select * from tbluseraccount where username='".$username."'";
		$result = mysqli_query($connection,$sql2);
		$row = mysqli_num_rows($result);
		if($row == 0){
			$sql ="Insert into tbluseraccount(emailadd,username,password) values('".$email."','".$username."','".$password."')";
			mysqli_query($connection,$sql);
			echo "<script language='javascript'>
						alert('New record saved.');
				  </script>";
		}else{
			echo "<script language='javascript'>
						alert('Username already existing');
				  </script>";
		}
	}
		