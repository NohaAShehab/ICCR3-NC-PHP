<?php

include 'layout.php';
include 'filehandler.php';
$users= get_all_users();
?>

<div class="container">
    <h1> All users </h1>
    <table class="table">
        <tr> <td> ID</td> <td> Email </td> <td> Password </td></tr>

        <?php
            foreach ($users as $user){
                echo "<tr>";
                $userdata = trim($user, "\n");
                $userdata = explode(":", $userdata);
                foreach ($userdata as $field){
                    echo "<td>{$field} </td>";
                }
                echo "</tr>";
            }


        ?>

    </table>


</div>
