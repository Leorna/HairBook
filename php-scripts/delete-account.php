<?php

include "database-manager.php";

$db = new DBManager();

$name_user = $_POST["user"];

$sql = "delete from Usr where name_user = '$name_user'";


if ($db->there_is_connection() and $db->manipulate_data($sql)) {
    $db->close_connection();
    $db->header_session("location:../index.php", "Account deleted");
    die();
}
elseif (!$db->manipulate_data($sql)) {
    $db->close_connection();
    $db->header_session("location:hairbook.php", "Was not possible to delete your account! Manipulate error", $name_user);
}
else {
    $db->close_connection();
    $db->header_session("location:hairbook.php", "Was not possible to delete your account! Manipulate error", $name_user);
    
}