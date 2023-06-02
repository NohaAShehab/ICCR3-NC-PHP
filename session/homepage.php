<?php

include 'layout.php';



### page allowed for only logged_in users

session_start();
if (count($_SESSION)) {
    echo " <h1 style='text-align: center'> welcome {$_SESSION['email']} to your home page </h1>";
}else{
    header("Location:login.php");
}



?>

    <a href="logout.php" class="btn btn-danger"> Logout </a>
