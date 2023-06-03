<?php
    include_once "./../layout.php";
    include './../model/students/operations.php';

    $rows = select();
?>

<a href="createstudent.php" class="btn btn-success"> Add new student </a>


<table class="table">
    <tr> <th> ID</th> <th> Name</th> <th>Grade </th>
        <td> Show </td>  <td> Edit</td> <td> Delete</td>
    </tr>
    <?php
        foreach ($rows as $row){

            echo "<tr>";
                foreach ($row as $field){
                    echo "<td> {$field}</td>";
                }
                echo "<td> <a class='btn btn-info'> Show</a> </td>  

            <td> <a href='editstudent.php?id={$row["id"]}' class='btn btn-warning'> Edit</a></td> 
            <td> <a href='./../controller/deleteuser.php?id={$row["id"]}' class='btn btn-danger'> Delete</a></td>";
            echo "</tr>";
        }

    ?>

</table>

