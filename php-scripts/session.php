<?php



function show_error() : void {
    session_start();
    $error = $_SESSION["error"];
    
    if (isset($error)) {
        echo <<<EOT
        <div data-alert class="alert-box info radius">
            This is an info alert with a radius.
            <a href="#" class="close">&times;</a>
        </div>
        EOT;
        $error = false;
    }
    session_abort();
}


?>