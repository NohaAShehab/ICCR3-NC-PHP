<?php


include 'layout.php';

echo "<div class='container'>";
echo "<h1> Trim function </h1>";

//$text = "\t\tThese are a few words :) ...  " ;
//var_dump($text);
//$trimmed = trim($text);
//var_dump($trimmed);


//$text = "\t\tThese are a few words :) ...  " ;
//var_dump($text);
//$trimmed = ltrim($text);
//var_dump($trimmed);

//$text = "\t\tThese are a few words :) ...  " ;
//var_dump($text);
//$trimmed = rtrim($text);
//var_dump($trimmed);


# trim specific chars

//$text = "\t\tThese are a few words :) ...";
//var_dump($text);
//$trimmed = trim($text, "T\t"); # remove char --> from beginning and end of the string
//var_dump($trimmed);

echo "<h2> Format string </h2>";

//$bio = "My name is
//Noha I works at iti";
//
//echo nl2br($bio);  # convert any \n to <br> tag


//$n =  43951789;
//$u = -43951789;
//$c = 65; // ASCII 65 is 'A'
//
//// notice the double %%, this prints a literal '%' character
//printf("%%b = '%b'\n", $n); // binary representation


//$s = 'monkey';
//$t = 'many monkeys';
//echo "<pre>";
//printf("[%s]\n",        $s); // standard string output
//printf("[%10s]\n",      $s); // right-justification with spaces
//printf("[%-10s]\n",     $s); // left-justification with spaces
//printf("[%010s]\n",     $s); // zero-padding works on strings too
//
//echo "</pre>";

//$num = 5;
//$location = 'tree';
//$format = 'There are %d monkeys in the %s';
//echo sprintf($format, $num, $location);
//


### add question --->

//$str = "What's your name?";  # ' is part of the string ---> escape char  \'
//var_dump($str);
//$newString=addslashes($str);
//echo $newString . "<br>";
////it can be enterpreted in the database
////#stripslashes
//echo stripslashes($newString) . "<br>";


####
//
//$mystring ="My name is Noha I works at ITI";
//
//$data = explode(" ", $mystring);
//var_dump($data);
//
//# array of strings
//$skills = ["PHP", "HTML", "Mysql"];
//
//echo implode(" ", $skills);  # return new string ---> printed


#### string tokenizer

//
//$string = "My name is Noha, I works at ITI";
//$tok = strtok($string, " ");  # split string to tokens
//var_dump($tok);  # the rest of the string is stored in the memory
//var_dump($string);
//while ($tok !== false) {
//    echo "Word=$tok<br/>";
//    $tok = strtok(" ");
//}

## substring
$phptxt = "PHP is simple";
//echo substr($phptxt,1);
//echo substr($phptxt,1,5);

//echo substr($phptxt,-2);


# comparing strings

//$var1 = "Hello";
//$var2 = "hello";
//var_dump(strcmp($var1, $var2));  # case sensitive compare
////if (strcmp($var1, $var2) !== 0) {
////    echo '$var1 is not equal to $var2 in
////a case sensitive string comparison';
////}


//
//$var1 = "Hello";
//$var2 = "hello";
//var_dump(strcasecmp($var1, $var2));  # not case sensitive compare
//


####
//
//$email = 'name@example.com';
//$domain = strstr($email,'@');  # return with the first part that contains the given string
//echo $domain."<br>";
//


### String hashing functions
//
//$string = 'Hello World!';  # 32 char ===> hash
//$testt= md5($string);
//echo($testt)."<br>";

//echo(ord("Noha"))."<br>";  # get ascii code of the first char

//
//echo str_repeat("iti ", 5)."<br>";
//$str = 'abcdef';
//echo str_shuffle($str)."<br>";


##### replace

//$choices ='r t e 4 3';
//$choices = explode(" ", str_shuffle($choices));
//print_r($choices);

//$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
//$onlyconsonants = str_replace($vowels, "", "Hello World of PHP");
//echo $onlyconsonants."<br>";
//
//


# substring replace
//$input = array('A: XXX', 'B: XXX', 'C: XXX');
//$input=substr_replace($input, '###', 3, 3);
//var_dump($input);
//echo implode('; ', $input);


echo "</div>";