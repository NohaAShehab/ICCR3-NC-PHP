<?php
//include './../../layout.php';
include 'db_connection_pdo.php';
include "connection_credits.php";

$db = connect_to_database($dbuser, $dbpassword, $dbhost, $dbport, $dbname);  # global scope


## select

function select(){
    global $db;
    try {
        $select_query = "select * from `phpncr3`.`students`;";
        $select_stmt = $db->prepare($select_query);
        $res  = $select_stmt->execute();
        $row_count = $select_stmt->rowCount();
        $rows = $select_stmt->fetchAll(PDO::FETCH_ASSOC);
        return $rows;

    } catch (Exception $e ){
        echo $e->getMessage();
    }
}


# insert ,

function insert($name, $grade){
    global $db;
    try {
        $inst_query = "insert into `phpncr3`.`students` (`name`, `grade`)
            values(:stdname,:stdgrade);";
        $inst_stmt = $db->prepare($inst_query);
        $inst_stmt->bindParam(":stdname", $name);
        $inst_stmt->bindParam(":stdgrade", $grade);
        $res=$inst_stmt->execute();
        if($res){
            $no_of_affected_rows = $inst_stmt->rowCount();
            $id = $db->lastInsertId();
            return $id;
        }

        return  false;

    } catch (Exception $e ){
        echo $e->getMessage();
        return false;
    }
}

#update ,

function update($id, $name, $grade){
    global $db;
    try {
        $update_query = "update `phpncr3`.`students` set `name`=:stdname, 
                                `grade`=:stdgrade  where `id`=:stdid; ";
        $update_stmt = $db->prepare($update_query);
        $update_stmt->bindParam(":stdname", $name);
        $update_stmt->bindParam(":stdgrade", $grade);
        $update_stmt->bindParam(":stdid", $id);
        $res=$update_stmt->execute();
        if($res){
            $no_of_affected_rows = $update_stmt->rowCount();
            return $no_of_affected_rows;
        }

        return  false;

    } catch (Exception $e ){
        echo $e->getMessage();
        return false;
    }
}


# delete

function delete($id){
    global $db;
    try {
        $delete_query = "delete from `phpncr3`.`students`  where `id`=:stdid; ";
        $delete_stmt = $db->prepare($delete_query);
        $delete_stmt->bindParam(":stdid", $id);
        $res=$delete_stmt->execute();
        if($res){
            $no_of_affected_rows = $delete_stmt->rowCount();
            return $no_of_affected_rows;
        }

        return  false;

    } catch (Exception $e ){
        echo $e->getMessage();
        return false;
    }
}


function select_student_by_id($id){
    global $db;
    try {
        $select_query = "select * from `phpncr3`.`students` where id=:stdid;";
        $select_stmt = $db->prepare($select_query);
        $select_stmt->bindParam(":stdid", $id);
        $res  = $select_stmt->execute();
        $row_count = $select_stmt->rowCount();
        $std = $select_stmt->fetch(PDO::FETCH_ASSOC);
        return $std;

    } catch (Exception $e ){
        echo $e->getMessage();
    }
}