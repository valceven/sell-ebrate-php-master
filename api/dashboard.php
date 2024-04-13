<?php    
    include './connectDb.php';
    include './readrecords.php';
    
    $sql = 'SELECT * from tblproduct';

    $result = mysqli_query($connection,$sql);
    
    $product = mysqli_fetch_all($result , MYSQLI_ASSOC);

    mysqli_free_result($result);

    mysqli_close($connection);
    
?>

<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Sell-Ebrate</title>
  <link href="../assets/css/styles.css" type="text/css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="jquery-3.7.1.min.js"></script>

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
      <li><h1><a style="color: red;" href="login.php">Logout</a></h1></li>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
      </ul>
    
  </nav>
    
<div style='background-color:#ffff00'>
    <center>
        <p style="color:white"><h2>List of Users</h2></p>
    </center>
</div>     

    <div>        
        <table id="tblUserRecords " class="table
            table-striped table-bordered table-sm" cellspacing="0" width="100%"> 
            <thead>
                <tr> 
                    <th>Username</th> 
                    <th>Firstname</th> 
                    <th>Lastname</th>
                    <th>Password</th>                     
                </tr> 
            </thead>  
            <tbody>
                <?php
                    while($row = $resultset->fetch_assoc()):
                    	$userId = $row['userId'];
                ?>
                <tr>
                    <td><?php echo $userId ?></td>
                    <td><?php echo $row['firstname'] ?></td>
                    <td><?php echo $row['lastname'] ?></td>
                    <!-- <td><?php echo $row['password'] ?></td>                     -->
                </tr>
                <?php endwhile;?>
            </tbody>         
        </table>
    </div>

    <div style='background-color:#ffff00'>
    <center>
        <p style="color:white"><h2>List of Products</h2></p>
    </center>
    </div>   
        <section class="main">
            <table class="product-information">
                <tr>
                    <th>
                        Product ID
                    </th>
                    <th>
                        Seller ID
                    </th>
                    <th>
                        Product Name
                    </th>
                    <th>
                        Description
                    </th>
                    <th>
                        Quantity
                    </th>
                    <th>
                        Price
                    </th>
                </tr>
                <?php foreach($product as $prod) { ?>
                <tr>
                    <td>
                        <h5>
                            <a href="details.php?id=<?php echo $prod['product_id']?>"><?php echo htmlspecialchars($prod['product_id']) ?></a>
                        </h5>
                    </td>
                    <td>
                        <h5>
                            <?php echo htmlspecialchars($prod['seller_id']) ?>
                        </h5>
                    </td>
                    <td>
                        <h5>
                            <?php echo htmlspecialchars($prod['product_name']) ?>
                        </h5>
                    </td>
                    <td>
                        <h5>
                            <?php echo htmlspecialchars($prod['description']) ?>
                        </h5>
                    </td>
                    <td>
                        <h5>
                            <?php echo htmlspecialchars($prod['quantity']) ?>
                        </h5>
                    </td>
                    <td>
                        <h5>
                            <?php echo htmlspecialchars($prod['price']) ?>
                        </h5>
                    </td>
                </tr>
                <?php } ?>
                <tr>
                    <td colspan="5" style="text-align: center; font-size: 3em;">
                        <?php 
                            if(count($product) >= 5){
                                echo 'You are a Manufacturer!';
                            } else {
                                echo 'You are a Newbee!';
                            }
                        ?>
                    </td>
                    <td>
                          <butto class="batones"><a href="addProduct.php">Add More!</a>  </button>
                    </td>
                </tr>
            </table>
</section>

          

    <div class="card">
    <div class="card-body" style="color:orange">
      <h5 class="card-title">Val Mykel Ceven Bolante & Adrian Sajulga</h5>
      <p class="card-text">BSCS- 2</p>
    </div>
  </div>