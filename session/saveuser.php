<?php
include "layout.php";
echo "<div class='container'> ";


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
    echo "<h1> processing user login </h1>";

    var_dump($email, $password);
    if($email==='noha@gmail.com'&& $password==='abc'){
        echo "<h1> Logged_in successfully </h1>";
//        var_dump($_SESSION);
        session_start();
        ### store data in the session

        var_dump($_SESSION);  # empty array
        $_SESSION["email"]=$email;
        $_SESSION["logged_in"]=true;
        header("Location:homepage.php");



    }else{
        $msg = "invalid username or password";
        $msg = json_encode(["message"=>$msg]);
        header("Location:login.php?errors=$msg");
    }


}