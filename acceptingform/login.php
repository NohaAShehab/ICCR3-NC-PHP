<?php
    echo '
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    ';
    echo "<div class='container'> ";
    echo "<h1>Welcome to Login page  </h1>";
    echo "<h1> Accessing GET </h1>";
    # built-in arrays --->

    # $_POST ---> data request method POST
    # $_GET ---> data request method GET
    # $_REQUEST

//    echo $_GET;


    // display content array
    var_dump($_GET);  # Dump information about any variable
//
//    print_r($_GET);
//
//    # name
//
//    echo "<h1> Helllo User:  {$_GET['email']} </h1>";

echo '<h1> Helllo User:  {$_GET["email"]} </h1>';



#####################

    echo "<h1> Accessing POST </h1>";

    var_dump($_POST);

    var_dump($_REQUEST);

    echo "</div>";









