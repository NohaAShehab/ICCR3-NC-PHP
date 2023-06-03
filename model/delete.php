<?php


include "./../layout.php";
include "connection_credits.php";
include "db_connection_pdo.php";
## open connection
$db = connect_to_database($dbuser, $dbpassword, $dbhost, $dbport, $dbname);
# write query
//$delete_query ="delete from  `phpncr3`.`students`where `id`=1";
//#execute query
//$res = $db->query($update_query);

echo "<h1>Delete query </h1>";
$id = 6;
$update_query ="delete from `phpncr3`.`students`  where `id`=:stdid";

$stmt = $db->prepare($update_query);  # send template to the server
$stmt->bindParam(":stdid", $id);
$res = $stmt->execute();  # true means that the query executed by the database successfully
var_dump($res);

var_dump($stmt->rowCount());







