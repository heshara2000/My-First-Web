<?php
 include 'config.php' ;

 
if(isset($_POST["add_to_cart"])){
    $product_name = $_POST ['product_name'];
    $product_price = $_POST ['product_price'];
    $product_image = $_POST ['product_image'];
    $product_quantity= 1;
  
    $select_cart= mysqli_query($conn , "SELECT * FROM 'cart' WHERE name='{$product_name}'" );
  
    if(mysqli_num_rows($select_cart)> 0){
      echo  'product already added to the cart';
    }else {
      $insert_product = mysqli_query($conn, "INSERT INTO 'cart'(Name,Quantity,price,image) VALUES('{$product_name}','$product_quantity','{$product_price}','{$product_image}')");
  
      echo 'product added to cart succesfull! ';
  
    }
  }

?>