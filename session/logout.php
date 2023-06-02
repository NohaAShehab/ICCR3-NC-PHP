<?php



    echo "welcome to logout page";

    # to destroy session

    session_start();

    $_SESSION=[];

    session_destroy();

    setcookie("PHPSESSID", "", time()-60, "/", "", true);

    header("Location:login.php");