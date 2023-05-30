<?php
echo '
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    ';
# display errors in page
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


echo "<div class='container'> ";
   echo  "<h1> <li> Local scope ?</li> </h1>";

   function sayhello(){
       $name= 'Morsy';  # variable defined in the local scope
       # can be accessed only inside the function
       echo "<h1 style='color: green'> Hello {$name} </h1>";
   }
//   sayhello();
//
//   echo $name;

//echo  "<h1> <li> Parameter scope ?</li> </h1>";
//
//function sayWelcome($username){
//    # can be accessed only inside the function
//    echo "<h1 style='color: green'> Welcome {$username} </h1>";
//}
//sayWelcome("AlNahhal");
//
//echo $username;
//var_dump(sayWelcome("Ali"));
//
echo  "<h1> <li> Global scope ?</li> </h1>";
    # any variable defined in the PHP Script can be accessed
    #anywhere
//    $course = "PHP";

//    echo $course;
//
//    echo "<pre style='color: purple'>{$course}
//    edee
//    eee
//    </pre>";

//    echo "<h3> Access global variable from inside the function </h3>";
//
//    $course=  'PHP';
//    function printCourseInfo(){
//        global $course;
//        echo $course;
//        $course = "Angular";
//        echo "<br>from inside the function {$course}";
//
////        $name ="Ahmed";
//    }
//
//    printCourseInfo();
//    var_dump($course);

//    var_dump($name);

echo  "<h1> <li> Static scope </li> </h1>";

//    function saywelcome(){
//        static  $count = 0;
//        $count ++;
//        echo "<h1 style='color: purple'>
//        Welcome to PHP Course  {$count}</h1>";
//
//    }
//
//
//    saywelcome();
//    saywelcome();
//    saywelcome();

//    $count = 0;
//
//    function saywelcome(){
//        global $count;
//        $count ++;
//        echo "<h1 style='color: purple'>
//            Welcome to PHP Course  {$count}</h1>";
//
//    }
//
//
//    saywelcome();
//    saywelcome();
//    saywelcome();
echo  "<h1> <li> Super global </li> </h1>";

# $_POST, $_GET, $_SESSION, $_REQUEST, $_FILES, $_SERVER

function testsuperglobal(){
    var_dump($_GET);
}

    $_GET["username"]="Ali";
    var_dump($_GET);

testsuperglobal();
echo "</div>";

