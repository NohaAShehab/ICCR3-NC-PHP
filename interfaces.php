<?php

include_once 'layout.php';

echo "<div class='container'> ";

echo "<h1> Interfaces  </h1>";


Interface Transportation {
    public function setModel($model);
    public function setYear($car);
}


Interface Machine{
    public function move();
}


//abstract class Car implements Transportation, Machine{
//
//
//}

class Car implements Transportation, Machine{
public function setModel($model)
{
    // TODO: Implement setModel() method.
    $this->model = $model;
}
public function setYear($car)
{
    // TODO: Implement setYear() method.

}
public function move()
{
    // TODO: Implement move() method.
}
}


$c = new Car;
$c->setModel("Model");
var_dump($c);