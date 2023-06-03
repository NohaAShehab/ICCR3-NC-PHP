<?php


include "./../layout.php";
include "connection_credits.php";
include "db_connection_pdo.php";
echo "<h1> Select query </h1>";

$db = connect_to_database($dbuser, $dbpassword, $dbhost, $dbport, $dbname);



try{
    $select_query = "Select * from `phpncr3`.`students`;";
    $select_stmt = $db->prepare($select_query);
    $res = $select_stmt->execute();
    var_dump($res);
    $no_of_rows= $select_stmt->rowCount();
    var_dump($no_of_rows);

    ### fetch data ?

//    $rows = $select_stmt->fetchAll();  # array --> contains rows information
//    var_dump($rows);

        # control how can you fetch the data ?
        # fetch all data as associative array ?
        $rows = $select_stmt->fetchAll(PDO::FETCH_ASSOC);
//        var_dump($rows);

        ### fetch one row ?
//        $one_row = $select_stmt->fetch(PDO::FETCH_ASSOC);
//        var_dump($one_row);
//        $first= false;
//        $row = $select_stmt->fetch(null,
//            $first? PDO::FETCH_ORI_FIRST: PDO::FETCH_ORI_NEXT );
//
//        var_dump($row);


}catch (Exception $e){
    echo $e->getMessage();
}

?>

<table class="table">
    <tr> <th> ID</th> <th> Name</th> <th>Grade </th></tr>
    <?php
        foreach ($rows as $row){

            echo "<tr>";
                foreach ($row as $field){
                    echo "<td> {$field}</td>";
                }
            echo "</tr>";
        }

    ?>

</table>
