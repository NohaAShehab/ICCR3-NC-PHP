<?php


include './../layout.php';
include './../model/students/operations.php';
## prepare data
echo "<div class='container'>";
echo "Data received";
//var_dump($_POST);

### validation --> front , backend


$name = $_POST["name"];
$grade = $_POST["grade"];
//
$added = insert($name, $grade);

var_dump($added);

$table_url = "./../views/datatable.php";
header("Location:{$table_url}");