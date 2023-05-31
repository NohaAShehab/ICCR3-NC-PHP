<?php

include 'basic.php';

    echo "<h1> Read operation </h1>";


    # 1- open files
//    $fileobject = fopen("mycv.txt", 'r');
//    var_dump($fileobject);
//    if ($fileobject){
//        echo is_resource($fileobject);
//        echo '<h2>File opened successfully  </h2>';
//    }

        ###########  1- read data file

        $fileobject = fopen("mycv.txt", 'r');
//        if ($fileobject){
//            # get size of file
//            $filesize = filesize('mycv.txt');
//            $data = fread($fileobject, $filesize);
//            var_dump($data); # string
//        }


        ### read file line by line
//        $lines = file("mycv.txt"); # read file content into an array (each line is one element in the array)
//        var_dump($lines);

        # move cursor through --> fseek

//        fseek($fileobject, 10);
//        $data = fread($fileobject, 100);
//        var_dump($data);

        ## read line from the file --> into an array
        $line = fgetcsv($fileobject, 100, ':'); # read one line and split it
        # according
//        var_dump($line);
        print_r($line);

        #####  read line --> into string ---> 99
        $line = fgets($fileobject, 40);
        var_dump($line);
        ### loop over the file

//        var_dump( feof($fileobject));

        # get all lines
        while (!feof($fileobject)){

            $line = fgetcsv($fileobject, 100, ":");
//            print_r($line);
//            print("<br>");
        }

        fseek($fileobject, 0);
        $alldata = fread($fileobject, 10000);
//        var_dump($alldata);


        fclose($fileobject);
        ############# Read function

//        readfile("mycv.txt");

        ################# read file into one step
//        $data = file_get_contents("mycv.txt");
//        var_dump($data);  # read data into one string
        ###################################################
        $path = "C:/wamp64/www/PHPSmart\Day02/filehandling.php";
        echo basename($path);










echo "</pre> </div>";