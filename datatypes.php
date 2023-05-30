<?php


echo '
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    ';
# display errors in page
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


echo "<div class='container display-5'> <pre> ";

    $name = 'Ahmed';

    $num = 10;

    var_dump($name);

//    echo gettype($name);
    # convert from type to another ?
//    echo gettype($num);
//    $num= (string)$num;
//    var_dump($num);

//    $email = 'nshehab10@iti.gov.eg';
//
//    var_dump($email);
//
//    $email= (int)$email;
//    var_dump($email);


//    $name = 'Ali';
//    settype($name, 'int');
//    var_dump($name);

    echo "<h1> Variable of variable </h1>";
//
//    $name = "iti";
//
////    $iti = "Information Technology Institute";
//    $iti = 'name';
//
////    echo $name;
//echo $$name;
//
//echo $$$name;


//    $num1 = 10;
//    $num2 = 300;
//
//    var_dump($num2 <=> $num1);

#########################3

# reference operator

//$num1 = 10;
//$num2 = $num1;
//
//echo "num1= {$num1}, num2 = {$num2}</br>";
//
//$num2 = 20;
//echo "num1= {$num1}, num2 = {$num2}";



//$num1 = 10;
//$num2 = &$num1;
//
//echo "num1= {$num1}, num2 = {$num2}</br>";
//
//$num2 = 20;
//echo "num1= {$num1}, num2 = {$num2}";
//
//
//unset($num2);
//
//var_dump($num2);


###






//$a = @(25/0);
//var_dump($a);
//// INF
//$b= 44/0;
//var_dump($b);


echo "bye";



























//    $dir_content=`ls -l`;
//    var_dump($dir_content);

//    function test(){
//        echo "test";
//    }
//
//    var_dump(is_callable(test));
    ## isset , empty
    echo "<h4>1- varaible is not defined  </h4>";
//
//    var_dump(isset($new_capital));  # isset false
//
//    var_dump(empty($new_capital)); #True
echo "<h4>1- variable is  defined but without value  or with null </h4>";
//$new_capital;
//var_dump(isset($new_capital));  # isset false
//
//var_dump(empty($new_capital)); #True
echo "<h4>1- variable is  defined but falsy value ('', 0 ,false)  </h4>";
//$new_capital=null;
//var_dump(isset($new_capital));  # isset true
//
//var_dump(empty($new_capital)); #True


echo "<h4>1- varaible is  defined but with out value  </h4>";
//exit;
//$new_capital='ITI';
var_dump(isset($new_capital));  # isset false

var_dump(empty($new_capital)); #false










    echo "</pre>";



    $myclousure = function (){
        echo "Hello Nora";
    };

//    $myclousure();

    var_dump(is_callable($myclousure));


        $NAME = 'NORA';

        var_dump(is_callable($NAME));

