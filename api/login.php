<?php 

include 'connectDb.php';

$errors = array('username' => '', 'password' => '');

if (isset($_POST['btnLogin'])) {
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM tbluseraccount WHERE username='" . $username . "'";
    $result = mysqli_query($connection, $sql);
    $count = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result);
    
    if (empty($username)) {
        $errors['username'] = 'Please Enter a username';
    }

    if (empty($password)) {
        $errors['password'] = 'Please Enter a password';
    }
    
    if ($count == 0) {
        echo "<div style='background-color: #f8d7da; color: #721c24; padding: 10px; border: 1px solid #f5c6cb; border-radius: 5px;'>Username not existing.</div>";
			echo "<script>window.setTimeout(function() {window.location.href = 'login.php';}, 1000);</script>";
      $errors['username'] = 'Please Enter a valid username';
    } elseif ($row[3] != $password) {
      echo "<div style='background-color: #f8d7da; color: #721c24; padding: 10px; border: 1px solid #f5c6cb; border-radius: 5px;'>Incorrect password</div>";
			echo "<script>window.setTimeout(function() {window.location.href = 'login.php';}, 1000);</script>";
      $errors['password'] = 'Please Enter a valid password';
    } else {
        session_start();
        $_SESSION['username'] = $row[0];
        header("Location: ./dashboard.php"); 
        exit();
    }
}