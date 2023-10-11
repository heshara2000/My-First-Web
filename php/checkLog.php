<?php
session_start();
//check the user login validation

 //include 'config.php';

 //check the login btn submission

if(isset ($_POST['log_btn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    require_once 'config.php';

    $sql = "SELECT * FROM users WHERE email='$email' ";

    $result = mysqli_query($conn,$sql);
    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if ($user){
       if($password == $user["password"]) {
        $_SESSION["user"] = "yes";
        header('location:Menu.php');
       }
       else{
        echo "<div class='alert alert-danger'>password does not match</div>";
        $_SESSION['check']="password does not match!! Try again";
        header('location:login.php');
       }

    }else {
        echo "<div class='alert alert-danger'>email does not match</div>";
        $_SESSION['check']="email is does not match! Try again";
        header('location:login.php');

    }
}
?>