<?php


include_once 'layout.php';

echo "<div class='container'> ";

echo "<h1> closure and classes </h1>";



$formatname= function(){
  var_dump($this);
  echo "<h1 style='color: purple;text-align: center'>
        $this->name
    </h1>";
};


class Person{
    public $name;
    function __construct($name){
        $this->name = $name;
    }

}


//$p =  new Person("Ali");
//
//$closureobj=$formatname->bindTo($p);
//var_dump($closureobj);
//$closureobj();



//class Teacher{
//
//    public $name ;
//
//}
//
//$t  = new Teacher();
//$t->name = 'test';
//$formatname->bindTo($t)();
##### bind closure to object contains private data
//class Teacher{
//
//    private $name="test" ;
//
//}
//
//$t  = new Teacher();
### scope binding
//$formatname->bindTo($t, Teacher::class)();


### from php 7

//$formatname->call($t);  ### call the closure automatically
//
//
//
//
//$p =  new Person("Ali");
//$formatname->call($p);
//


echo '<h1 style="color: red; font-weight: bold">
Closure inside a class </h1>';



class NewClass{
    private $name;
    function __construct($propertyValue){
        $this->name=$propertyValue;
    }
    function display(){
            // a clousure here....
        echo "<h3> Display is being called </h3>";
        ### divide function execution
        #### function returns with a action
        return function (){
            echo "the closure is returned form the class";
            echo "<h2> {$this->name}</h2>";
        };
    }
}


$new =new NewClass("Ali");
var_dump($new);

$res=$new->display();
//var_dump($res);


print("------------ <br>");


$res();


$new->display()();









