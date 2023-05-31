<?php


include 'Dealingwithfiles/basic.php';
        echo "<h1>Arrays </h1>";


        #1- define array --> indexed array ---> array elements associated to index start from zero

        $arr = ["Ahmed", "ITI", "PHP", 3425435,true, 3.14];
//        var_dump($arr);
        #2- access array element
//        echo $arr[2];
        # 3- count no of elements in the array
        $count =count($arr);
//        echo "<br> No of elements  = {$count}";

        # 4- loop over the array ?
//        foreach ($arr as $element){
//            echo "<li> {$element} </li>";
//        }

        # print element, index

//        for($i=0; $i<$count; $i++){
//            echo "<br> {$i}=>{$arr[$i]}";
//        }
//        foreach ($arr  as $index=>$element){
//            echo "<li> {$index} => {$element} </li>";
//        }

        ### generate array
//        $myarr = range(0,10, 2);
//        var_dump($myarr);
//    $myarr = range("a","z", 2);
//    var_dump($myarr);

#################################################################################################
//$myinfo =["Noha", 31, 'ITI'];

## associative array

//$myinfo = [
//    "name"=>"Noha",
//    "age"=>31,
//    "work"=>"ITI",
//    "courses"=>["PHP", "Laravel", "Python"]
//];
//
//
//print_r($myinfo);
//echo $myinfo["courses"][0];

$myinfo = [
    "name"=>"Noha",
    "age"=>31,
    "work"=>"ITI",
    "courses"=>["PHP", "Laravel", "Python"],
    "New Capital",
    true
];


//print_r($myinfo);
//echo $myinfo["courses"][0];


//$myinfo["city"]="Cairo";

//$myinfo['name']='NohaShehab';
//var_dump($myinfo);

################################# create array from variables
$name = 'Ahmed';
$email = "Ahmed@gmail.com";
$salary = 30000;

$emp_employee=  compact("name", "email", "salary");
//print_r($emp_employee);



################# array operators

//$num=[2,4,6,8,10];  # 0 , 1, 2,3, 4
//$alphas=["a","b","c","d"];  # 0 , 1,2,3
//$arr3= $alphas + $num;
//var_dump($arr3);
//


$arr = range(1,3);
//$chars = range('a', 'i');
//$arr2  = range('1', '10');
//var_dump($arr2);
//$arr2= ['1', '2', '3'];
//var_dump($arr==$arr2);
//var_dump($arr2===$arr);


#### sort array ---> simple indexed arrays
//$names = array( 'noha', "Fatma", "Dina", "Andrew","Shimaa","suliman" );
//sort($names); // returns with the are sorted ascending.
//var_dump($names);



### sort associative array

//$prices = array( "meat"=>100, "sugar"=>10, "tea"=>8 );
//asort($prices);  # sort data using values
//arsort($prices);
//var_dump($prices);
//

//
//$prices = array( "meat"=>100, "sugar"=>10, "tea"=>8 );
//ksort($prices);  # sort data using keys
//krsort($prices);  # sort data using keys
//
//var_dump($prices);

################## user defined sort #########################3
//class Person{
//
//    public $id;
//    public $name ;
//
//    function __construct($id, $name)
//    {
//        $this->id = $id;
//        $this->name= $name;
//    }
//}

//$p = new Person(1000, "Ahmed");
//$p2= new Person(10, "Mohamed");
//$p3 =  new Person(500, "Test");
//
//
//$persons = [$p,$p2, $p3];

//function sort_person_according_id($person1,$person2){
//    if ($person1->id ==$person2->id){
//        return 0 ;
//    }
//    return $person1->id < $person2->id ? -1 :1;
//}
//
//
//print_r($persons);
//usort($persons, "sort_person_according_id");
//echo "<br>---------------------------<br>";
//print_r($persons);
//
//function cmp($a, $b)
//{
//    if ($a == $b) {
//        return 0;
//    }
//    return ($a < $b) ? -1 : 1;   #ternary operator
//}
//$a = array(3, 2, 5, 6, 1);
//usort($a, "cmp");
//
//var_dump($a);

##################################################

$arr = [43,545,6,23,2];

shuffle($arr);

//print_r($arr);

//$prices = array( "meat"=>100, "sugar"=>10, "tea"=>8 );
//
//shuffle($prices);
//print_r($prices);


###################################################################################33


$colors = array(
    'one' => 'red',
    'two' => 'blue',
    'three' => 'yellow',
    "Four"=>"red"

);

$filpped_array=array_flip($colors);

print_r($filpped_array);


####################33 load file content in an array ---> draw in a table

//$sentence = "My name is Noha";
//$sentence = explode(" ", $sentence);
//var_dump($sentence);

$users = file("users.txt");
//var_dump($users);

echo "<table class='table'> 
       <tr>  <td> Index </td></td><td>Username</td> <td>Password</td> <td>User id</td> 
       <td>Group ID</td><td>Comment about user</td><td>Home directory</td><td>Login shell</td>
       </tr>

";

foreach ($users as $id=>$user){

    $userdata = trim($user, "\n");  # string
    $userdata = explode(":", $userdata);  # split string to an array
//    var_dump($userdata);
    echo "<tr> <td> {$id}</td>";
    foreach ($userdata as $field ){
        echo "<td> {$field} </td>";
    }
    echo"</tr>";
}

echo "</table>";














































$colors = array(
    'one' => 'red',
    'two' => 'blue',
    'three' => 'yellow',
    "Four"=>"red"

);

//var_dump(array_flip($colors));









echo "</pre></div>";