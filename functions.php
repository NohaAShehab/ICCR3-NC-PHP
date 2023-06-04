<?php


include_once 'layout.php';

echo "<div class='container'> ";

echo "<h1> Functions </h1>";

### function with know number of arguments ---.
# php supports function hoisting
# you call function before defining it
//echo sumnum(35,55);
//function sumnum($x, $y){
//    echo "<br>{$x}, {$y}";
//    return $x + $y;
//}
//
////$res = sumnum(20, 20);
////var_dump($res);
//
//sumnum("iti", "abc");

#### restrict datatype of variable
//function sumnum(int $x,int $y){
//    echo "<br>{$x}, {$y}";
//    return $x + $y;
//}
//
////$res = sumnum(20, 20);
////var_dump($res);
//
//sumnum("iti", "abc");
//

//$x = 0;
//
//var_dump($x);

######################function can return with data #################


//
//function saywelcome($name){
//    echo "<h1> Welcome {$name} </h1>";
//}
//
//
//$res=saywelcome("Ahmed");
//var_dump($res);  # null


###############################3

//echo "<li>Functions with default arguments </li>";
//
//
//function sumnum(int $num1, int $num2=10){
//    echo $num1,'   ' ,$num2, '<br>';
//}
//
//
//sumnum(10);
//sumnum(23,33);


#### functions with unknown number of arguments



//function askforgrade(... $students){
//    var_dump($students);
//}
//askforgrade();
//askforgrade(13,5);
//askforgrade(334,3434,355);

#######################

//function incrementFun($value, $amount = 1) {
//    $value = $value +$amount;  # local scope
//    echo "<h1>from function {$value} </h1>";
//}
//$value=10;
//incrementFun($value);
//var_dump($value); // 10


//function incrementFun(&$value, $amount = 1) {
//    $value = $value +$amount;  # local scope
//    echo "<h1>from function {$value} </h1>";
//}
//$value=10;
//incrementFun($value);
//var_dump($value); // 11























