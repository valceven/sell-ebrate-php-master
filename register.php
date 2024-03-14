<?php 

  $username = $firstname = $lastname = $email = $password = "";
  $errors = array('username'=>'','firstname'=>'','lastname'=>'',
  'email'=>'','password'=>'' , 'chickbox'=>'');

  if(isset($_POST['btnRegister'])){

      if(empty($_POST['username'])){
        $errors['username'] = 'Please enter a username.';
      }else{
        $username = $_POST['username'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $username)){
          $errors['username'] = 'Please enter letters.';
      }
    }

    if(empty($_POST['firstname'])){
      $errors['firstname'] = 'Please Enter Your firstname.';
    }else{
      $firstname = $_POST['firstname'];
      if(!preg_match('/^[a-zA-Z\s]+$/', $firstname)){
        $errors['firstname'] = 'Please enter letters.';
    }
  }

    if(empty($_POST['lastname'])){
      $errors['lastname'] = 'Please Enter Your lastname.';
    }else{
      $lastname = $_POST['lastname'];
      if(!preg_match('/^[a-zA-Z\s]+$/', $lastname)){
        $errors['lastname'] = 'Please enter letters.';
    }
  }

    if(empty($_POST['email'])){
      $errors['email'] = 'Please enter an email.';
    }else{
      $email = $_POST['email'];
      if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errors['email'] = 'Email must be a valid email address.';
      }
    }

    if(empty($_POST['password'])){
      $errors['password'] = 'Please Enter a password.';
    }

    if(empty($_POST['chickbox'])){
      $errors['chickbox'] = 'Please chick the boks.';
    }

    if(array_filter($errors)){

      echo 'alert("Danghaga nimo oy.")';
    
    }else{
      require './api/register.php';
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
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="jquery-3.7.1.min.js"></script>


  <?php
  include_once "navbar.php"
    ?>

</head>
<body>

  <section class="register-sec">
    <div class="register-container">
      <form method="POST" action="register.php" class="row g-3">
        <h3 class="registerH3">Registration Form</h3>
        <div class="col-md-6">
          <label for="username" class="form-label">User Name</label>
          <input type="text" class="form-control" placeholder="Username" aria-label="Username" name="username" />
          <p style="color:red"><?php echo $errors['username']?></p>
        </div>
        <div class="col-md-6">
          <label for="firstname" class="form-label">First Name</label>
          <input type="text" class="form-control" placeholder="First name" aria-label="First name" name="firstname" />
          <p style="color:red"><?php echo $errors['firstname']?></p>
        </div>
        <div class="col-md-6">
          <label for="lastname" class="form-label">Last Name</label>
          <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" name="lastname" />
          <p style="color:red"><?php echo $errors['lastname']?></p>
        </div>
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Email</label>
          <input type="email" placeholder="adrianbolante@gmail.com" class="form-control" name="email" />
          <p style="color:red"><?php echo $errors['email']?></p>
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Password</label>
          <input type="password" placeholder="*******" class="form-control" name="password" />
          <p style="color:red"><?php echo $errors['password']?></p>
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Gender</label>
          <select name="gender" name="gender" class="form-select" aria-label="Default select example">
            <option selected value="male">Male</option>
            <option value="female">Female</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Birthdate</label>
          <input type="date" class="form-control" name="birthdate" />
        </div>


        <div class="col-11">
          <div class="form-check">
            <input class="form-check-input" name= "chickbox" type="checkbox" id="gridCheck" />
            <label class="form-check-label" for="gridCheck">
              <strong>I have read the terms and conditions</strong>
              <!-- <p style="color:red"><?php echo $errors['chickbox']?></p> -->
            </label>
          </div>
        </div>

        <div class="col-12">
          <div class="batones">
            <button type="submit" name="btnRegister" class="btn btn-primary">Sign Up Now!</button>
            <strong><p style="padding: 10px 5px; margin-bottom:-7px;"> Already have an Account? </p></strong>
            <a style ="margin-top: 2px" class="btn btn-primary" href="login.php">Log In Instead</a>
          </div>
        </div>

      </form>
    </div>
  </section>

  <div class="card">
    <div class="card-body" style="color:orange">
      <h5 class="card-title">Adrian Sajulga</h5>
      <p class="card-text">BSCS- 2</p>
    </div>
  </div>
</body>

</html>
