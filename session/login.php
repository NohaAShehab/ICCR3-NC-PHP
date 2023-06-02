<?php

    session_start();
    if(count($_SESSION)){
        if ($_SESSION['logged_in']){
            header("Location:homepage.php");
        }
    }



    include 'layout.php';
    $email_error=$password_error=$old_email=$message='';
    if(isset($_GET) and !empty($_GET) and in_array("errors", array_flip($_GET))){
        $errors = json_decode($_GET["errors"],1);
        $errors_keys = array_flip($errors);
        if(in_array("message", $errors_keys)){
            $message = $errors["message"];
        }

        if(in_array('email', array_flip($errors))){
            $email_error = $errors["email"];
        }
        if(in_array('password', array_flip($errors))){
            $password_error = $errors["password"];
        }

        if(isset($_GET["old"])){
            $old_data= json_decode($_GET["old"],1);
            if(isset($old_data["email"])){
                $old_email = $old_data["email"];
            }


        }


    }
 ?>

<div class="container">
        <h1>Login</h1>
    <div class="alert alert-danger">
        <?php echo $message;  ?>
    </div>
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