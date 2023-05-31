<?php



    function get_all_users(){

       try{
           $users = file("users.txt");
           return $users;
       }catch (Exception $e){
           return false;
       }
    }


//    $users = get_all_users();
//    var_dump($users);

    function get_new_id(){

        $users = get_all_users();
        if($users){
            $last_user = end($users);
            $user_data = explode(":", $last_user);
            $id =(int) $user_data[0];
            return $id+1;
        }

        return  1;
    }


function save_new_user($userdata){

    try{
        $fileobject=  fopen("users.txt", "a");
        if ($fileobject){
            fwrite($fileobject, $userdata);
            fclose($fileobject);
            return true;
        }
    }catch (Exception $e){
        return false;
    }
}

