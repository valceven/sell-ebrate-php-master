<?php

$errors = array('username' => '', 'password' => '');

if (isset($_POST['btnLogin'])) {
    include './api/connectDb.php'; // Include database connection
    
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

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link href="styles.css" type="text/css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="jquery-3.7.1.min.js"></script>

    <?php
  include_once "navbar.php"
    ?>

</head>

<body>

    <section class="register-sec">
        <div class="register-container" style="min-height: 400px">
            <form method="POST" action="" class="row g-3">
                <h3 class="registerH3">LogIn</h3>
                <div class="col-md-6">
                    <label for="username" class="form-label"><b>Username</b></label>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                        name="username" />
                    <p style="color: red"><?php echo $errors['username'] ?></p>
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label"><b>Password</b></label>
                    <input type="password" placeholder="*******" class="form-control" name="password" />
                    <p style="color: red"><?php echo $errors['password'] ?></p>
                </div>

                <div class="col-12">
                    <button type="submit" name="btnLogin" class="btn btn-primary">Log In</button>
                </div>

                <div class="notSingedYet" style="margin-top: -9px">
                    <p>Dont have an Account Yet?</p>
                    <a href="register.php" class="btn btn-primary">Sign Up Now!</a>
                </div>

            </form>
        </div>
    </section>

    <div class="card" style="color:orange">
        <div class="card-header">Footer</div>
        <div class="card-body">
            <h5 class="card-title">Val Mykel Ceven Bolante</h5>
            <p class="card-text">BSCS- 2</p>
        </div>
    </div>
</body>

</html>
