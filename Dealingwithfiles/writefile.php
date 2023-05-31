<?php

include 'basic.php';
    echo "<h1> write data to the file </h1>";

//    $fileobject = fopen("names.txt", 'w');
//    if ($fileobject){
//        var_dump($fileobject);
//
//        fwrite($fileobject, "Ali\n");
//        fwrite($fileobject, 'Nahhal'.PHP_EOL);
//        fwrite($fileobject, "Abc");
//        fwrite($fileobject, "test");
            ### fwrite === fputs
//
//        fclose($fileobject);
//    }

    echo "<h2> Read file into one step </h2>";

    file_put_contents('names.txt', 'inserted via file put content');

echo "</pre> </div>";

