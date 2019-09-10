<?php



function show_error() : void {
    session_start();
    $error = $_SESSION["error"];
    
    if (isset($error)) {
        echo "<p>$error</p>";
    }
    session_abort();
}


?>