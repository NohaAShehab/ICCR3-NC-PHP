<?php


include_once 'layout.php';

echo "<div class='container'> ";

echo "<h1> Traits  </h1>";




//class Person{
//    private  $name;
//
//    function __construct($name)
//    {
//        $this->name= $name;
//    }
//
//    function sayhello(){
//        echo "<h1>Hello {$this->name} </h1>";
//    }
//}
//
//
//
//class Bird{
//    private $name;
//    function __construct($name, $no_of_wings){
//        $this->name = $name;
//        $this->no_of_wings = $no_of_wings;
//    }
//
//    function sayhello(){
//        echo "<h1>Hello {$this->name} </h1>";
//    }
//}
//$p= new Person("Hendo");
//
//$p2 = new Person("Semon");
//$p2->sayhello();
//
//$b = new Bird("Tweety", 2);
//$b->sayhello();
//



## group set of functions -implementation-

trait helperfunctions{
    function sayhello(){
        echo "<h1>Hello {$this->name} </h1>";
    }
    function sayWelcome(){
        echo "<h1>Welcome {$this->name} </h1>";
    }
    private function trimstring($property){
        return trim($this->$property);
    }

}




class Person{
    use helperfunctions;
    private  $name;

    function __construct($name)
    {
        $this->name= $name;
    }

    function printformattedname(){
        $formatted= $this->trimstring("name");
        echo "<h1>.{$formatted}.</h1>";
    }


}

$p= new Person("    Hendo              ");
$p->sayhello();
$p->printformattedname();
var_dump($p);
//
class Bird{
    use helperfunctions;
    private $name;
    function __construct($name, $no_of_wings){
        $this->name = $name;
        $this->no_of_wings = $no_of_wings;
    }
    ## override welcome functoion
    public function sayWelcome()
    {
        echo "<h1 style='color: darkred'> Welcome {$this->name}, {$this->no_of_wings} </h1>";
    }

}


$b = new Bird("Abbass",33);
$b->sayhello();
$b->sayWelcome();
