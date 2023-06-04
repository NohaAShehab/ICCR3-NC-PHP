<?php
include_once 'layout.php';

echo "<div class='container'> ";

echo "<h1> Classes </h1>";


//class Person{
//
//    ## define properties
//    ## you must specify access modifier for the properties
//
//
//    ## define methods
//}
//
//$p = new Person(); # take new instance from the class
//
//$n = new Person();## call constructor
//var_dump($n, $p);
//

###########################


//class Person{
//    public $name;
//    private $first_name;
//    protected $last_name;
//    private function sayHello(){
//        echo "Hello ".$this->first_name;
//    }
//}
//
//$p = new Person();

//var_dump($p);
//
//# access property of object
//var_dump($p->name);
//$p->name = 'Ahmed';
//var_dump($p);
////$p->first_name='Ahmed';
////var_dump($p);
//
//
//$p->last_name='Ahmed';
//var_dump($p);



//$p->sayhello();


############ constructor
## special function is being called when you create new object
#from the class


//class Person{
//    public $name;
//    protected $age;
//    private $salary;
//    private function sayHello(){
//        echo "Hello ".$this->first_name;
//    }
//
//    function __construct(string $name, int $age, int $salary){
//        echo "-- this function is being called while object creation";
//        # ACCESS OBJECT PROPERTIES
//        $this->name = $name;
//        $this->age = $age;
//        $this->salary  =$salary;
//    }
//
//
//}
//$p = new Person("omnia", 22, 40000);
//var_dump($p);
//
//var_dump($p->age);

####### setters and getters












#####################################

//class Person{
//    public $name;
//    protected $age;
//    private $salary;
//    private function sayHello(){
//        echo "Hello ".$this->first_name;
//    }
//
//    function __construct(string $name, int $age, int $salary){
//        echo "-- this function is being called while object creation";
//        # ACCESS OBJECT PROPERTIES
//        $this->name = $name;
//        $this->age = $age;
//        $this->salary  =$salary;
//    }
//
//
//    /**
//     * @param int $salary
//     */
//    public function setSalary(int $salary): void
//    {
//        if ($salary> 0){
//        $this->salary = $salary;
//        }else{
//            throw new Exception("invalid salary value");
//        }
//    }
//
//    /**
//     * @return int
//     */
//    public function getSalary(): float
//    {
//        return $this->salary*.8;
//    }
//
//    function  __destruct()
//    {
//        // TODO: Implement __destruct() method.
//        echo "<h1 style='color: red'>
//        The object is being destructed </h1>";
//    }
//
//}
//
//
//$p = new  Person("Hendo", 25, 50000);
//$p2 = new Person("test", 333, 3434343);
//
//unset($p2);
//
////$p->setSalary(-10000);
//$p->setSalary(100000);
//var_dump($p);
//
//
//var_dump($p->getSalary());
//
//
//$p->country = 'Egypt';  # dynamic setter and getter
//var_dump($p->country);
//
//var_dump($p);
//echo "---- this is the last line in the script";
################
//
//class Person{
//    public $name;
//    protected $age;
//    private $salary;
//    private function sayHello(){
//        echo "Hello ".$this->first_name;
//    }
//
//    function __construct(string $name, int $age, int $salary){
//        # ACCESS OBJECT PROPERTIES
//        $this->name = $name;
//        $this->age = $age;
//        $this->salary  =$salary;
//    }
//
//
//    /**
//     * @param int $salary
//     */
//    public function setSalary(int $salary): void
//    {
//        if ($salary> 0){
//            $this->salary = $salary;
//        }else{
//            throw new Exception("invalid salary value");
//        }
//    }
//
//    /**
//     * @return int
//     */
//    public function getSalary(): float
//    {
//        return $this->salary*.8;
//    }
//
////    function  __destruct()
////    {
////        // TODO: Implement __destruct() method.
////        echo "<h1 style='color: red'>
////        The object is being destructed </h1>";
////    }
//
//    function __set(string $name, $value): void
//    {
//        // TODO: Implement __set() method.
////        echo "--------------";
//        $this->$name = $value."#";
////        throw  new Exception("You are not allowed to
////        modify object architecture ");
//    }
//
//    function __get(string $name)
//    {
//        echo "this function will be called when you
//        try to access non existing variable";
//        // TODO: Implement __get() method.
////        return $this->$name."%%%%";
//        return  null;
//    }
//
//}
//
//
//$p = new  Person("Hendo", 25, 50000);
//$p2 = new Person("test", 333, 3434343);
//
//
//$p->country = 'Egypt';
//var_dump($p);
//
//
//var_dump($p->country);
//
//var_dump($p->iti);  #
//
//
//$p->name = 'updated';
//var_dump($p);
//
//var_dump($p->name);
//
//



###################3 static methods

## static members --> properties method represent class
# instance
//class Math
//{
//    const pi = 3.14159;
//    static function squared($input)
//    {
//        return $input*$input;
//    }
//}
//# call static member using class without initiating the object
//var_dump(Math::pi);
//echo Math::squared(8);

####################### constant always static ########


//class Math
//{
//    const pi = 3.14159;
//    static $mul = 1;
//
//    function testSelf()
//    {
//        echo self::pi;
//    }
//}
//
//$m = new Math();
//$m->testSelf();

####################################












































