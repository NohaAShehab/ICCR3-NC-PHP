<?php


include "./../layout.php";
include "connection_credits.php";
include "db_connection_pdo.php";
echo "<h1> update query </h1>";

$db = connect_to_database($dbuser, $dbpassword, $dbhost, $dbport, $dbname);

//$update_query ="update `phpncr3`.`students` set `name`='updated' where `id`=1";
//
//$res = $db->query($update_query);

########### update
$name= "delete from students;";
$id = 5;
$update_query ="update `phpncr3`.`students` set `name`=:stdname where `id`=:stdid";

$stmt = $db->prepare($update_query);  # send template to the server
$stmt->bindParam(":stdname", $name);
$stmt->bindParam(":stdid", $id);
$res = $stmt->execute();  # true means that the query exectued by the database successfully
var_dump($res);


$row_count = $stmt->rowCount(); # return with number of affected rows
var_dump($row_count);