<?php

require 'validation.php';  ### namespace
require 'valid.php'; # test


echo "<h1>Welcome to namespace </h1>";

$t= new Test();
var_dump($t);
$t->teststring();

#######3 use class from the namespace

use Testvalidationclass;
$tt =new Testvalidationclass\Test();
var_dump($tt);