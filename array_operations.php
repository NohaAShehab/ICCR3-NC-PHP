<?php


include "Dealingwithfiles/basic.php";



//$fruits = ['banana', 'apple', 'kiwi', "apple"];
//$found = in_array('kiwi', $fruits);
//var_dump($found);
//
//var_dump(current($fruits));
//var_dump(next($fruits));
//var_dump(current($fruits));
//var_dump(end($fruits));
////var_dump(reset($fruits));
//
//foreach ($fruits as $f){
//
//    echo "<li>{$f} </li>";
//}
###########################3




//function print_fruits($value){
//    echo "<li>##{$value}##</li>";
//}
//$fruits = ['banana', 'apple',"Kiwi","Orange"];
//array_walk($fruits,"print_fruits");


#####################################3

//$a=array("test"=>"abcd",22=>"test");
////var_dump(array_merge($a));
//
//
//$fruits = ['banana', 'apple',"Kiwi","Orange"];
//
//
//var_dump(array_merge($a, $fruits));
//

#########################################

//$input_array = array('a', 'b', 'c', 'd', 'e');
//$output_array = array_chunk($input_array, 2);
//var_dump($output_array);



#######################
$instructors = ["Eng.Shery", "Noha", "Andrew"];
$courses = ['Admin', 'PHP', 'Node'];
function get_course_info($instructor, $course){
        return "{$instructor} teaches {$course} ";
}

//$result  = array_map("get_course_info", $instructors, $courses);
//var_dump($result);


//$combinedArray = array_combine($courses,$instructors);
//var_dump($combinedArray);



//$my_array = [1,90,2,null,3,'',55,[],5,6,7,8,""];
//$non_empties = array_filter($my_array, function ($element){
//    return $element> 10;
//});
//var_dump($non_empties);



//$array1 = array('blue' => "blueeee", 'red' => 2, 'green' => "Greeen", 'purple' => 4);
//$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan' => 8);
//var_dump(array_intersect_key($array1, $array2));




#### array from user

//$user = ["name"=>"Ahmed", "track"=>"PHP", "salary"=>50000, "company"=>"Valeo"];
//
//
//$db_fileds = ["name", "salary"];
//var_dump($db_fileds);
//
//var_dump(array_intersect_key($user,array_flip($db_fileds)));

#################3


//$students=Array("Ali","Ahmed","Mostafa","Omar","Ahmed");
//var_dump(count($students)); // 5
//var_dump(sizeof($students)); // 5
//var_dump(array_count_values($students));


//$info=["username"=>"Noha","email"=>"nshehab@iti.gov.eg","track"=>"Application"];
//extract($info);
//echo $username." ".$email." ".$track;
//


$info = array('coffee', 'brown', 'caffeine');
// Listing all the variables
list($drink, $color, $power) = $info;
echo "$drink is $color and $power makes it special.";





































echo "</pre> </div>";