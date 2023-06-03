<?php



define("DB_HOST", "localhost");
define("DB_USER", "phpncr3");
define("DB_PASSWORD", "Iti123456789_");
define("DB_DATABASE", "phpncr3");
try {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD,
        DB_DATABASE, 3306);
//    var_dump($conn);

    ######################## select

    $res = $conn->query('select * from students');
    var_dump($res);

    ## fetch data
//    $rows = $res->fetch_all(1);
//    var_dump($rows);
    ### fetch one object
//    $row = $res->fetch_assoc();
//    var_dump($row);
//
//    $row = $res->fetch_object();
//    var_dump($row);

    ## free result
    $res->free_result();

    ## close ?

//    $conn->close();

##########################################Insert ####################################################
//    $sql = "INSERT INTO `phpncr3`.`students` (`name`, `grade`)
//     VALUES ('Ahmed Taha',100)";
//    $res = $conn->query($sql);
//    var_dump($res);
//    var_dump($conn->affected_rows);
//    var_dump($conn->insert_id);

    ###########################################################


}catch (Exception $e){
    echo $e->getMessage();
}