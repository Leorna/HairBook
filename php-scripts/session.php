<?php



function show_error() : void {
    session_start();
    $error = $_SESSION["error"];
    
    if ($error) {
        echo "<script>alert('Error');</script>";
    }
    session_abort();
}


?>