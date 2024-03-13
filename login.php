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
    <div class="register-container" style="min-height: 400px">
      <form method="POST" action="./api/login.php" class="row g-3">
        <h3 class="registerH3">LogIn</h3>
        <div class="col-md-6">
          <label for="username" class="form-label"><b>Username</b></label>
          <input type="text" class="form-control" placeholder="Username" aria-label="Username" name="username" />
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label"><b>Password</b></label>
          <input type="password" placeholder="*******" class="form-control" name="password" />
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
    <div class="card-header" >Footer</div>
    <div class="card-body">
      <h5 class="card-title">Val Mykel Ceven Bolante</h5>
      <p class="card-text">BSCS- 2</p>
    </div>
  </div>
</body>

</html>
