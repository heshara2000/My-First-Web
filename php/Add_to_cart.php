<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

  
  <script src="../js/main.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/add_To_Cart.css">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary  py-0 my-0">
  <div class="container-fluid" style="background-color: blue;">
    <a class="navbar-brand text-light" href="#">Fruit~store</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Menu.php">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="About-Us.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">sign In</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Login.php">Log In</a>
        </li>
      
        
      </ul>
    </div>
  </div>
</nav>
  
<div class="container">
  <div class="container-box">
    <h1> My Items</h1>
    <div class="table-responsive">
      <table class="table table-bordered">
        <tr>
          <th width="40%">Item Name</th>
          <th width="10%">quantity</th>
          <th width="20%">Price</th>
          <th width="10%">Total</th>
          <th width="5%">Action</th>
        </tr>

        <?php
        if (!empty($_SESSION["shopping_cart"]))  
        {
          $total =0;
        }
          foreach($_SESSION["shopping_cart"] as $keys -> $values)
          {
            if ($_SESSION["shopping_cart"][$keys]['menu_id'] == $_POST['menu_id']);
            {
              $total++;
              $_SESSION["shopping_cart"][$keys]['item_quantity'] == $_SESSION['item_quantity'];

            }
         ?>  
         
         <tr>
          <td><?php echo $values["item_name"]; ?></td>
          <td><?php echo $values["item_quantity"]; ?></td>
          <td>$<?php echo $values["item_price"]; ?></td>
          <td><?php echo $values["item_name"]; ?></td>
          <td><?php echo number_format($values["item_quantity"]* $values["item_price"], 2)?></td>
          <td><a href="./menu.php?action=delete&id=<?php echo $values["item_name"];?>"><span class="text-danger">Remove</span></a></td>

         </tr>
          
          
         <?php
            $total = $total+ ($values["item_quantity"] * $values["item_price"]);
          }
         ?>
         

         <tr>
          <td colspan="3" text-align="right">total:</td>
          <td text-align="right">$<?php echo number_format($total, 2);?></td>
          <td></td> 
        </tr>
        
        
      </table>
        
    </div>
        
  </div>
        
</div>
</body>
</html>