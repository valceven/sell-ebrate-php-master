<?php 

    include('connectdb.php');

    if(isset($_POST['btnSubmit'])){

        $product_name = $_POST['product_name'];
        $description = $_POST['description'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];

        $sql1 = "INSERT INTO tblproduct(seller_id,product_name,description,quantity,price) VALUES (1,'$product_name','$description', '$quantity' , '$price')";
        mysqli_query($connection,$sql1);  
        echo "<script language='javascript'>s
        alert('Product added successfully');
        </script>";

    }

?>

<!DOCTYPE html>

<head>

    <link href="../assets/css/styles.css" rel="stylesheet" type="text/css">
</head>


<body>

    <nav class="navbar-stylish">
    <img src="/assets/images/logo.svg" class="logo">
    <h1>
      Sell Ebrate
    </h1>
      <ul>
      <li><h1><a href="../sell-ebrate-client/index.php">Index</a></h1></li>
      <li><h1><a href="../sell-ebrate-client/aboutUs.php">About Us</a></h1></li>
      <li><h1><a href="../sell-ebrate-client/contactUs.php">Contact Us</a></h1></li>
      <li><h1><a href="../sell-ebrate-client/register.php">Register</a></h1></li>
      <li><h1><a href="dashboard.php">Dashboard</a></h1></li>
      <li><h1><a style="color: red;" href="login.php">Logout</a></h1></li>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
      </ul>
  </nav>

    
    <section class="add-container">
        <div class="register-container">
            <form method="POST">
            <h2 class="h2">
            Add A Product Form
             </h2>
                <div class="col">
                    <label for="product_name"> Product Name</label>
                    <input type="text" name="product_name" placeholder="add a chicken">
                </div>
                <div class="col">
                    <label for="description">Description</label>
                    <input type="text" name="description" placeholder="Enter something interesting...">
                </div>
                <div class="col">
                    <label for="quantity">Quantity</label>
                    <input type="text" name="quantity" placeholder="Enter something interesting...">
                </div>
                <div class="col">
                    <label for="price">Price</label>
                    <input type="text" name="price" placeholder="Enter a number that's interesting...">
                </div>
                <div>
                    <div class="batones">
                        <button type="submit" name="btnSubmit" class="batones">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>


</html>