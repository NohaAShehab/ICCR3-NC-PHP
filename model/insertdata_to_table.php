<?php


include "./../layout.php";
include "connection_credits.php";
include "db_connection_pdo.php";
echo "<h1> Insert data to table </h1>";
$db = connect_to_database($dbuser, $dbpassword, $dbhost, $dbport, $dbname);
### insert operation

//    $inst_query = "insert into `phpncr3`.`students` (`name`, `grade`) values('Ahmed', 100)";
//
//    ## to execute query ?
//
//    $res = $db->query($inst_query);
//
//    var_dump($res);



######################################

//$username = "Ali";
//$grade = 100;
//
//    $inst_query = "insert into `phpncr3`.`students` (`name`, `grade`)
//            values('{$username}', '{$grade}')";
//
//    var_dump($inst_query);

#################3 insert data using prepared statement (colon place holder)
$username = "Ali";
$grade = 100;

$inst_query = "insert into `phpncr3`.`students`(`name`, `grade`) values(:stdname,:stdgrade)";
var_dump($inst_query);

### prepare query

$stmt = $db->prepare($inst_query);
var_dump($stmt);

$stmt->bindParam(":stdname", $username);
$stmt->bindParam(":stdgrade", $grade);
$res=$stmt->execute();  # true --> query executed successfully
var_dump($res);

### get last inserted id

$id = $db->lastInsertId();
var_dump($id);








