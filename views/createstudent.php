<?php

include "./../layout.php";

?>

<div class="container">
    <h1> Add new student </h1>
    <form action="./../controller/saveuser.php" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">grade</label>
            <input type="number" class="form-control" name="grade" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>



</div>
