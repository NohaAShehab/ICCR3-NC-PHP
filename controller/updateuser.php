<?php

include_once './../model/students/operations.php';
$id  = $_GET["id"];

var_dump($_GET);
var_dump($_POST);
$name = $_POST["name"];
$grade = $_POST["grade"];

if($id){
    echo "Here";

    $res = update($id,$name, $grade );
    $table_url = "./../views/datatable.php";


        header("Location:{$table_url}");

}

