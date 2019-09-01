<?php

include "database-manager.php";


$db = new DBManager();
$user = $_POST["user"];
$id = $_POST["id"];
$title = $_POST["title"];
$note = $_POST["note"];


if ($db->there_is_connection()) {
    $sql = "update Notes set title = '{$title}', note = '{$note}' where id = $id";

    if ($db->manipulate_data($sql)) {
        $db->close_connection();
        $db->header_session("location:hairbook.php", "Notes updated", $user);
        die();
    }
    else {
        $db->close_connection();
        $db->header_session("location:hairbook.php", "Was not possible to update", $user);
        die();
    }
}
else {
    $db->close_connection();
    $db->header_session("location:hairbook.php", "Notes was not updated", $user);
    die();
}