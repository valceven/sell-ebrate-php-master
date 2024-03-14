<?php    
    include 'api/connectDb.php';
    include 'api/readrecords.php';   
    require_once 'navbar.php'; 
?>

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

    <div class="card">
    <div class="card-body" style="color:orange">
      <h5 class="card-title">Val Mykel Ceven Bolante & Adrian Sajulga</h5>
      <p class="card-text">BSCS- 2</p>
    </div>
  </div>