<?php

include_once './../model/students/operations.php';
$id  = $_GET["id"];


if($id){
    echo "Here";

    $res = delete($id );
    $table_url = "./../views/datatable.php";
    header("Location:{$table_url}");

}
