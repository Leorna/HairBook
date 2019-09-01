<?php



function show_error() : void {
    session_start();
    $error = $_SESSION["error"];
    
    if ($error) {
        echo "<li class='menu-text'>$error</li>";
    }
    session_abort();
}


?>