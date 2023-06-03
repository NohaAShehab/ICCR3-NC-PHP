<?php

include "./../layout.php";
include './../model/students/operations.php';
//    var_dump($_GET);
    $std = select_student_by_id($_GET["id"]);
//    var_dump($std);

?>

<div class="container">
    <h1> Edit student </h1>
    <form action="./../controller/updateuser.php?id=<?php echo $std['id'] ?>" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control" name="name"

                   value="<?php echo $std['name'] ? $std['name']: '' ; ?>"
                   id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <input type="hidden" name="std_id" value="<?php echo $std['id'] ? $std['id']: null ; ?>">
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">grade</label>
            <input type="number" class="form-control"
                   value="<?php echo $std['grade'] ? $std['grade']: 0 ; ?>"

                   name="grade" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>



</div>
