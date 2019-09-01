<?php

include "database-manager.php";

$db = new DBManager();

$id = $_POST["id"];
$user = $_POST["user"];
$title = $_POST["title"];
$note = $_POST["note"];


if ($db->there_is_connection()) {
    $sql = "delete from Notes where id = $id";

    if ($db->manipulate_data($sql)) {
        $db->close_connection();
        $db->header_session("location:hairbook.php", "Note deleted", $user);
        die();
    }
    else {
        $db->close_connection();
        $db->header_session("location:hairbook.php", "Note was not deleted", $user);
        die(); 
    }
}
else {
    $db->close_connection();
    $db->header_session("location:hairbook.php", "Note was not deleted", $user);
    die(); 
}