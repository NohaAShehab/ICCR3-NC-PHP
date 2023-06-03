<?php


define("DB_HOST", "localhost");
define("DB_USER", "phpncr3");
define("DB_PASSWORD", "Iti123456789_");
define("DB_DATABASE", "phpncr3");
try {
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD,
        DB_DATABASE, 3306);
//    var_dump($conn);

    #### select query

    $respro = mysqli_query($conn,"select * from students");
//    var_dump($respro);  #mysqli_result ?

//    $rows = mysqli_fetch_all($respro, 1);  # fetch data as associative array ?
//    var_dump($rows);

        # fetch one row

//        $row_associative = mysqli_fetch_assoc($respro);
//        var_dump($row_associative);
//
//
//        $row_object= mysqli_fetch_object($respro);
//        var_dump($row_object);
//
//
//        $row  = mysqli_fetch_row($respro);
//        var_dump($row);


        # best practice free result set
//        mysqli_free_result($respro);

        # best practice with mysqli ---> close connection

//        mysqli_close($conn);


    ################################ insert data using mysqli  #######################################


//    $sql = "INSERT INTO `phpncr3`.`students` (`name`, `grade`)
//        VALUES ('Ahmed Taha',100)";
//    $res =mysqli_query($conn, $sql);
//    var_dump($res);
//    var_dump($conn->affected_rows);
//    var_dump($conn->insert_id);
    //
//    mysqli_insert_id($conn)

    ##################### update ###############
//        $sql = "update `phpncr3`.`students` set name = 'Ahmed Mohsen'
//        where id = 32";
//    $res =mysqli_query($conn, $sql);
//    var_dump($res);
//    var_dump($conn->affected_rows);


    ##### delete

//    $sql = "delete from `phpncr3`.`students`
//        where id = 7";
//    $res =mysqli_query($conn, $sql);
//    var_dump($res);
//    var_dump($conn->affected_rows);
//    var_dump(mysqli_affected_rows($conn));
//

        ### prepared statement
    $name = 'added';
    $grade = 90;
    $sql = "insert into `phpncr3`.`students` (`name`,`grade`) values(?, ?)";
    $stmt=  mysqli_prepare($conn, $sql);
    $res=mysqli_stmt_bind_param($stmt,"si", $name, $grade);
    $result = mysqli_stmt_execute($stmt);
    var_dump($res);
    var_dump(mysqli_affected_rows($conn));
    var_dump(mysqli_insert_id($conn));

    var_dump($conn);






    if (mysqli_connect_errno()) {
        trigger_error(mysqli_connect_error());
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
} catch (Exception $e) {
    echo 'Connection failed: ' . $e->getMessage();
}