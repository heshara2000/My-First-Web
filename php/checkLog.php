<?php

//create connecton login.php
$conn = mysqli_connect('localhost','root','','fruits_store');

if(!$conn){
   die ("connection failed : " . mysqli_connect_error());
}else {
    echo ("login successfull ");
}

if(isset ($_POST['log_btn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(isset($_POST['remember'])){
        setcookie("email",$email, time() + (86400*30), "/");

        header("location:profile.php");
    }else {
        echo "invalid . <br> . click here to <a href='register.php'>  ";
    }


}else {
    header( "location: login.php");
}




$sql = "SELECT * FROM users WHERE 'email'=$email AND 'password'=$password ";

$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result)>0) {
    header("location:Menu.php");
    exit();
}else {
    echo ("invalid email or password try again");


}

mysqli_close($conn);
