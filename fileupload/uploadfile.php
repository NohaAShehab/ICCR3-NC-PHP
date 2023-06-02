<?php
include 'layout.php';

var_dump($_POST);

/*
 * when upload file -->multipart/form-data
 * upload file on the server --> in tmp path ?
 * you can find all the information you need about the uploaded file ?
 * $_FILES
 * */

var_dump($_FILES);

$file_info = $_FILES["file"];
var_dump($file_info);


$filename = $file_info["name"];
$tmp_name = $file_info["tmp_name"];
$file_size = $file_info["size"];

### move uploaded file to the current directory


try {
//    $res=move_uploaded_file($tmp_name, $filename);
    $res = move_uploaded_file($tmp_name, "images/".$filename);
    var_dump($res);

} catch (Exception $e) {
    echo $e;
}


?>

<img src="images/<?php echo $filename?>">



