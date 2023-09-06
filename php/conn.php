<?php 
  $con = mysqli_connect('localhost', 'root', '');

  // Check if the connection is successful
  if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
    echo "error wil occur" ;
  }

  mysqli_select_db($con, 'fruits_store');

  if(isset($_POST['submit_btn'])){
    $name = $_POST['username'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $number = $_POST['number'];
    $password = $_POST['password'];

    $query = "INSERT INTO users (username, email, address, number, password) VALUES('$name', '$email', '$address', '$number', '$password')";

    // Perform the query and check for errors
    if(mysqli_query($con, $query)) {
      header("location: login.php");
    } else {
      echo "Error: " . mysqli_error($con);
    }
  }

  // Close the database connection
  mysqli_close($con);
?>
