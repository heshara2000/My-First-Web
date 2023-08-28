<?php 
  $con = mysqli_connect('localhost','root','') ;
  if ($con) {
    echo "" ; 
  }else {
    echo "connection failed: " ;
  }
  

  mysqli_select_db($con, 'fruits_store') ;

//this isset function is used to submit the register initials of users to only login.php file.check the rgister btn named as 'submit_btn'
  if(isset($_POST['submit_btn'])){
    $name = $_POST['username'] ;
    $email = $_POST['email'];
    $address = $_POST['address'] ;
    $number = $_POST['number'] ;
    $password = $_POST['password'];
  
  
    $query = "INSERT INTO users (username,email,address,number,password) VALUES('$name','$email','$address', '$number','$password')" ;
    mysqli_query($con, $query) ;
    header("location:login.php") ;
     
  }


























?>