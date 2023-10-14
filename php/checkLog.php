<?php
session_start();
//check the user login validation

 //include 'config.php';

 //check the login btn submission
///set cookies



// Verify the email and password.
// ...

// Generate a unique random value for the cookie.
$cookie_value = uniqid();

// Set the cookie name, value, expiration date, and path.
setcookie("user_id", $cookie_value, time() + (86400 * 30), "/");

// The cookie will now be sent to the user's browser.




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