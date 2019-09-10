<?php
include "database-manager.php";
include "user-exist.php";


$db_manager = new DBManager();
$user_name = trim($_POST["user-name"]);
$hair_type = $_POST["hair-type"];
$pword = $_POST["password"];
$pword_confirm = $_POST["confirm-password"];


 

function check_user_name() : bool {
    global $user_name;
    global $db_manager;
    
    if ($user_name and !user_exist($user_name, $db_manager)) {
        return true;
    }

    return false;
}

$there_is_connection = $db_manager->there_is_connection();

if ($there_is_connection) {
    $db_manager->append_into_tuples("Usr");

    if (check_user_name() and $hair_type and $pword and (strlen($pword) > 5) and ($pword == $pword_confirm)) {

        $sql = "insert into Usr(name_user, pword, hair_type) values ('$user_name','$pword','$hair_type')";
        
        if ($db_manager->manipulate_data($sql)) {
            $db_manager->close_connection();
            $db_manager->header_session("location:hairbook.php", "", $user_name);
            die();
        } 
        else {
            $db_manager->close_connection();
            $db_manager->header_session("location:../index.php", "Error");
            die();
        }
    }
    elseif (!check_user_name()) {
        $db_manager->close_connection();
        $db_manager->header_session("location:../index.php", "User name error");
        die();
    }
    elseif (!$hair_type) {
        $db_manager->close_connection();
        $db_manager->header_session("location:../index.php", "Hair type error");
        die();
    }
    elseif (!$pword or !($pword == $pword_confirm) or !(strlen($pword) > 5)) {
        $db_manager->close_connection();
        $db_manager->header_session("location:../index.php", "Password error");
        die();
    } 
}
else {
    $db_manager->close_connection();
    $db_manager->header_session("location:../create-account.php", "Error");
    die();
}