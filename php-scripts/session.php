<?php



function show_error() : void {
    session_start();
    $error = $_SESSION["error"];
    
    if ($error) {
        echo "<script>alert('$error');</script>";
        $error = false;
    }
    session_abort();
}


?>