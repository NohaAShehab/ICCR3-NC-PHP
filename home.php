<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
        <div class="container"> 


             <h1> Welcome to ITI website </h1>
             <p> this file is being parsed on the server </p>

             <p> any content inside PHP Tag will be parsed in the server 
                Then the response is prepared and sent to the client in form 
                of HTML , CSS , JS ONLY </p>
        

        <div class='bg-warning'> 

            <?php
                echo "<h1 style='color:purple'> Hello World ..... </h1>" ; 
            ?>


            <h2 style='background-color:red'>
                    <?php  
                    // this a comment

                    /**
                     * 
                     * this is multiline comment 
                     * 
                     */

                     # this is a comment
                    echo "PHP" ;
                        echo "hiii
                        
                        new line \n

                        Good morning Ali, 

                        PHP  </br>


                        ksjf
                        ";

                    ?>
            </h2>

            <p>  
                

                <h1> Break </h1>
                    <?php 
                        echo "<p>Now, Its ";
                        echo date('H:i , jS F Y');
                        echo "</p>";
                    
                    ?>

            </p>
        </div>
        </div>
        <!-- test -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script>
                name = window.prompt("please enter your name: ")
                console.log(name)
        </script>
</body>
</html>