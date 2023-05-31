<?php

    include 'layout.php';
    $email_error=$password_error=$old_email='';
    if(isset($_GET) and !empty($_GET)){
//        var_dump($_GET);

        $errors = json_decode($_GET["errors"],1);
//        var_dump($errors);

        if(in_array('email', array_flip($errors))){
            $email_error = $errors["email"];
        }
        if(in_array('password', array_flip($errors))){
            $password_error = $errors["password"];
        }

        if(isset($_GET["old"])){
            $old_data= json_decode($_GET["old"],1);
//            var_dump($old_data);
            if(isset($old_data["email"])){
                $old_email = $old_data["email"];
            }


        }


    }
 ?>

<div class="container">
        <h1> Add new user </h1>
<form action="saveuser.php" method="POST">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email"name="email"
               value="<?php echo $old_email; ?>"
               class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
<!--        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
        <div class="text-danger"> <?php  echo $email_error; ?> </div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        <div class="text-danger"> <?php  echo $password_error; ?> </div>

    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>