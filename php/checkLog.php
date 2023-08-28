<?php

//create connecton
$conn = mysqli_connect('localhost','root','','fruits_store');

if(!$conn){
   die ("connection failed : " . mysqli_connect_error());
}else {
    echo ("login successfull ");
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE 'email'=$email AND 'password'=$password ";

$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result)>0) {
    header("location:Menu.php");
    exit();
}else {
    echo ("invalid email or password try again");


}

mysqli_close($conn);

?>