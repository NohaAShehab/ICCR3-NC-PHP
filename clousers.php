<?php



include_once 'layout.php';

echo "<div class='container'> ";

echo "<h1> closure </h1>";

# closure---> function with one time use
## modify action

## refer to the closure using variable name ?
$myclosure = function (){
    echo "hi";
};


//echo "hi";

//var_dump(is_callable($myclosure));
//
//
//$myclosure();
//var_dump($myclosure);



//############### closure with external variable
//$quantity = 1;
//# use special keyword to use the variable form outside
//$calculator = function($number) use($quantity) {
//    return $number + $quantity;
//};
//var_dump($calculator(7)); // 8
//
//
//
//
//$greeting = "Hii";
//
//$greet_user= function ($name) use($greeting){
//    echo "{$greeting}, {$name}";
//};
//
//$greet_user("Ahmed ElNahhal");


























