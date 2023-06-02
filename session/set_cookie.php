<?php


include 'layout.php';


echo "<div class='container'>  ";

echo "<h1> setting cookie </h1>";

    /**
     * setcookie(
            string $name,
            string $value = "",
            int $expires_or_options = 0,
            string $path = "",
            string $domain = "",
            bool $secure = false,
            bool $httponly = false
    ): bool
     *
     *

     */

    $res=setcookie("name", "noha",time()+3600, "/", "", true );

    var_dump($res);


setcookie( "name", "", time()- 60, "/","", 0);




