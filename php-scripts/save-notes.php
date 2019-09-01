<?php
include "database-manager.php";

$db_manager = new DBManager();
$note = $_POST["note"];
$title = $_POST["title"] or 'Sem título';
$user = $_POST["user"];

$there_is_connection = $db_manager->there_is_connection();

if ($there_is_connection and $note) {
    $sql = "insert into Notes(title, note, name_user) values ('$title', '$note', '$user')";

    if ($db_manager->manipulate_data($sql)) {
        $db_manager->close_connection();
        $db_manager->header_session("location:hairbook.php", "Saved", $user);
        die();
    }
    else {
        $db_manager->close_connection();
        $db_manager->header_session("location:hairbook.php", "Some error happened", $user);
        die();
    }
}
elseif (!$note) {
    $db_manager->close_connection();
    $db_manager->header_session("location:hairbook.php", "Some error happened", $user);
    die();
}
