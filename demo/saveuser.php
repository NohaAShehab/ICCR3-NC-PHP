<?php
include "layout.php";
include 'filehandler.php';
echo "<div class='container display-5'> ";

var_dump($_POST);

##### take data from post ---> save it to the file ?
#################### operation validate data before saving ?

$errors= [];
$old_data=[];
$email = trim($_POST["email"]);
$password = trim($_POST["password"]);
//var_dump(!(empty($email) and empty($password)));
//exit();
////if ((em($email) or isset($password))){
////    header("Location:register.php");
////}

if (isset($email) and !empty($email)){
        $old_data["email"] = $email;
}else{
    $errors["email"] = "email not valid";
}
if (isset($password) and !empty($password)){
    $old_data["password"]= $old_data;
}else{

    $errors["password"] = "password not valid";
}
if(count($errors)){

    ### convert errors to json string
    $string_errors = json_encode($errors);
    $url = "Location:register.php?errors={$string_errors}";
    if(count($old_data)){
        $old_data_string = json_encode($old_data);
        $url.="&old={$old_data_string}";
    }
    header($url);
}else {

##############################
    $id = get_new_id();
    $userdata = "{$id}:{$email}:{$password}\n";
    echo $userdata;

    ## save data to the file ?
    $saved = save_new_user($userdata);
    var_dump($saved);
    header("Location:datatable.php");



}