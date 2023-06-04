<?php


include_once 'layout.php';

echo "<div class='container'> ";

echo "<h1> Abstract class  </h1>";

## abstract class must contains at least abstract method


abstract class Base {
    function __construct() {
        echo " <br> <b> This is abstract class constructor ";
    }
// This is abstract function #abstract
// function cannot contain body
    abstract function printdata();

    function sayhello($name){
        echo "<h1> $name </h1>";
    }
}

//$b = new Base();  # you take object from abstract class


### inheritance -->
### you must either implement the abstract method in the parents
### or define as abstract

class Derived extends base {
    function __construct() {
        echo "<br> <b> Derived class constructor";
        Base::__construct();
    }

    public function printdata()
    {
        // TODO: Implement printdata() method.
        echo "</br> implemented  in the derived class";
    }
}
$b1 = new Derived;
$b1->printdata();