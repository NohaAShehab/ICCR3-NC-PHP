<?php


# use connection

include "./../layout.php";
include "connection_credits.php";
include "db_connection_pdo.php";


    $db = connect_to_database($dbuser, $dbpassword, $dbhost, $dbport, $dbname);

    var_dump($db);
    try{
        $creat_query = "create table `phpncr3`.`students` (`id` int auto_increment primary key, 
            `name` varchar(100),
         `grade` int default 10)";
//        var_dump($query);
        $res=$db->query($creat_query);  # execute sql statement
        var_dump($res);


    }catch (Exception $e){
        echo $e->getMessage();
    }


