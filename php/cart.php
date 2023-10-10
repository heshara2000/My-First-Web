<?php
 include 'config.php' ;

 
if(isset($_POST["add_to_cart"])){
    $product_name = $_POST ['product_name'];
    $product_price = $_POST ['product_price'];
    $product_image = $_POST ['product_image'];
    //$product_quantity= 1;

  
    $insert_product = mysqli_query($conn, "INSERT INTO 'cart'(Name,price,image) VALUES('{$product_name}','{$product_price}','{$product_image}')");
    echo "item added to the table" ;
    
    $insert_count = mysqli_query($conn,$insert_product);

   
  
  }

?>