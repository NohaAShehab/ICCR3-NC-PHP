<?php


include 'basic.php';
echo "<h1> append data to the file </h1>";

    $fileobject = fopen("names.txt", 'a');
    if ($fileobject){
        var_dump($fileobject);
//
        fwrite($fileobject, "Ali");
        fwrite($fileobject, "Khaled\n");
        fwrite($fileobject, "Abc".PHP_EOL);
        fputs($fileobject, "test");
### fwrite === fputs
//
//        fclose($fileobject);
    }



echo "</pre> </div>";

