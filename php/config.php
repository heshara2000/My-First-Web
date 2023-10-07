<?php 
$conn = mysqli_connect('localhost','root','','fruits_store');

if(!$conn){
    echo ("connection failed; " .  mysqli_connect_error());
}else {
    echo ("you are logged in");
}

?>