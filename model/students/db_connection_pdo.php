<?php

include './../layout.php';
# 1- set connection credits

echo "<div class='container'> ";
echo "<h1 style='color: purple; text-align: center'> connection to databases PDO </h1>";
## 2- construct connection

function connect_to_database($dbuser, $dbpassword, $dbhost, $dbport, $dbname)
{
    try {

        $dsn = "mysql:dbname={$dbname};host={$dbhost};port={$dbport}"; # data source notation

        $db = new PDO($dsn, $dbuser, $dbpassword);

        if ($db) {
            echo "Connection succeeded";
            return $db;
        }

        return  false;
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}







