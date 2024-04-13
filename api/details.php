<?php 
    include("connectdb.php");

    if(isset($_GET['id'])){
        $id = mysqli_real_escape_string($connection, $_GET['id']);

        $sql = "SELECT * FROM tblproduct WHERE product_id = $id";

        $result = mysqli_query($connection, $sql);

        $product = mysqli_fetch_assoc($result);

        mysqli_free_result($result);
    }

    if(isset($_POST['delete'])){
        
        $id_delete = mysqli_real_escape_string($connection, $_POST['id_delete']);
    
        $sql = "DELETE FROM tblproduct WHERE product_id = $id_delete";

        if(!mysqli_query($connection, $sql)){
            echo 'Query Error: ' . mysqli_error($connection);
        }else{
            echo '<script>alert("Product deleted successfully!");</script>';
        }
    }

    mysqli_close($connection);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
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
      </ul>
</nav>
  
<section class="prod-details-sec">
    <div class="prod-details-container">
        <?php if(isset($product)): ?>
        <h3>Product ID: <?php echo htmlspecialchars($product['product_id'])?></h3>
        <h3>Seller ID: <?php echo htmlspecialchars($product['seller_id'])?></h3>
        <h3>Product Name: <?php echo htmlspecialchars($product['product_name'])?></h3>
        <h3>Description: <?php echo htmlspecialchars($product['description'])?></h3>
        <h3>Quantity: <?php echo htmlspecialchars($product['quantity'])?></h3>
        <h3>Price: <?php echo htmlspecialchars($product['price'])?></h3>

        <form action="details.php" method="POST">
            <input type="hidden" name="id_delete" value="<?php echo htmlspecialchars($product['product_id']); ?>">
            <button type="submit" name="delete" class="batones">Delete</button>
        </form>
        <?php else: ?>
        <p>Product not found.</p>
        <?php endif; ?>
    </div>
</section>

</body>
</html>
