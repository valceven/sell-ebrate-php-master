<?php
	
	include 'connectDb.php';
	
	$query = 'SELECT * from  tbluserprofile';
    $resultset = mysqli_query($connection, $query);

	