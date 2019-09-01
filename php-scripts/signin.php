<?php

include "database-manager.php";
include "user-exist.php";

$user = $_POST["user-name"];
$pword = $_POST["password"];
$db_manager = new DBManager();


function check_password() : bool {
    global $pword;
    global $db_manager;

    foreach ($db_manager->tuples as $tuple) {
        if ($pword == $tuple["pword"]) {
            return true;
        }
    }

    return false;

}


$there_is_connection = $db_manager->there_is_connection();

if ($there_is_connection) {
    $db_manager->append_into_tuples("Usr");

    $user_exist = user_exist($user, $db_manager);
    $password_ok = check_password();

    if ($user_exist and $password_ok) {
        $db_manager->close_connection();
        $db_manager->header_session("location:hairbook.php", '', $user);
        die();
    }
    elseif (!$user_exist) {
        $db_manager->close_connection();
        $db_manager->header_session("location:../login.php", "User Name Error");
        die();
    }
    else {
        $db_manager->close_connection();
        $db_manager->header_session("location:../login.php", "Password Error");
        die();
    }
}
else {
    $db_manager->close_connection();
    $db_manager->header_session("location:../login.php", "Error");
    die();
}



