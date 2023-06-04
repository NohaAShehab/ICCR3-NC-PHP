<?php

include_once 'layout.php';

echo "<div class='container'> ";

echo "<h1> Anonymous classes  </h1>";


interface Vechile{

    function print_vechile_name();
}


class School{
    private $transportation;

    /**
     * @param mixed $transportation
     */
    public function setTransportation(Vechile $transportation): void
    {
        $this->transportation = $transportation;
    }

    /**
     * @return mixed
     */
    public function getTransportation(): Vechile
    {
        return $this->transportation;
    }
}



$iti = new School();
//class Bus implements Vechile{
//    public function print_vechile_name()
//    {
//        // TODO: Implement print_vechile_name() method.
//        echo "<h1> ITI Bus</h1>";
//    }
//}
//
//$b= new Bus();
//$iti->setTransportation($b);
//
//var_dump($iti);
//
////$res = $iti->getTransportation();
////var_dump($res);
////$res->print_vechile_name();
//
//
//$iti->getTransportation()->print_vechile_name();



$mit = new School();

$mit->setTransportation(new class implements Vechile{
    public function print_vechile_name()
    {
        // TODO: Implement print_vechile_name() method.
        echo "<h1 style='color: red'>We use Plans </h1>";
    }
});

$mit->getTransportation()->print_vechile_name();



$ashor = new School();

###### customized behaviour depends on the caller instance
$ashor->setTransportation(new class implements Vechile{
    public function print_vechile_name()
    {
        // TODO: Implement print_vechile_name() method.

        echo "<h1> Sorry we have no money to bring 
transportation for you</h1>";
    }
});


$ashor->getTransportation()->print_vechile_name();