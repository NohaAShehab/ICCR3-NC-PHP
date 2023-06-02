<?php

include 'layout.php';

echo "<div class='container'> ";
echo "<h1>Regex </h1>";

# example:
//$email = 'nshehab@iti.gov.eg@iti.gov.eg';
////$pattern = "/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
//$pattern= "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
//var_dump(preg_match($pattern, $email));  # 1 string  follow pattern
//## return 1 if part of the string follows the pattern
//#
//
//if (preg_match($pattern, $email)) {
//    echo "<br>" . 'well formed';
//} else {
//    echo "<br>" . 'not well formed';
//}


###############33

# validate expression --> preg_match --> accurate result
//$email = 'nshehab@iti.gov.eg@iti.gov.eg';
//$pattern= "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
//$matches = [];
//var_dump(preg_match_all($pattern, $email, $matches));  # 1 string  follow pattern
//# make sure that all the string parts follows the pattern
//#
//var_dump($matches);


###
//
//$str = "The rain in SPAIN falls mainly on the plains.";
//#pattern inside // , i for ignoring case
//$pattern = "/ain/i";
//if(preg_match_all($pattern, $str, $matches)) {
//    print_r($matches);
//}
//
//

########################## filter var ?
//$email="nohashehab.itimail.com";
//if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//    $emailErr = "Invalid email format";
//    echo $emailErr;
//}else{
//    echo "<br>".'Checked by php functions and well formed';
//}
//
//
//


























