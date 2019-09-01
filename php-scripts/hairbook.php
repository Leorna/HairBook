<!DOCTYPE html>

<?php
session_start();
$user = $_SESSION["name-user"];
$error = $_SESSION["error"];

if ($error) {
    echo "<script>alert({$error})</script>";
}

?>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../foundation-6.5.1-complete/css/foundation.css">
    <link rel="stylesheet" href="../foundation-6.5.1-complete/css/app.css">
    <link rel="stylesheet" href="../my_styles/style.css">
    <title>HairBook</title>
</head>

<body>
    <div class="top-bar" style="margin-bottom: 10px;">
        <div class="top-bar-left">
            <ul class="menu">
                <li class="menu-text"><?=$user;?></li>
                <li class="menu-text">HairBook</li>
                <li><button class="button hairbook-elements" id="take-note-button">Take a note</button></li>
                <li><button><a class="button hairbook-elements" href="../index.php">Logout</a></button></li>
                <li>
                    <form method="post" action=""><input class="button hairbook-elements" type="submit" value="Change hair type"></form>
                </li>
            </ul>
        </div>
    </div>
    
    <div class="grid-container take-note-grid">
        <form method="post" action="save-notes.php" class="callout text-center">
            <div class="grid-container">
                <?php
                echo <<<EOT
                <input name="user" type="hidden" value="$user">
                <label for="title">Title</label>
                <input type="text" name="title" placeholder="Title">
                <textarea name="note" cols="30" rows="10" placeholder="Take a note"></textarea>
                EOT;
                ?>
            </div>
            <input class="button hairbook-elements" type="submit" value="Save">
        </form>
    </div>


    <div class="grid-container">
        <?php
        require "show-notes.php";
        ?>
    </div>

    <script src="../foundation-6.5.1-complete/js/vendor/jquery.js"></script>
    <script src="../foundation-6.5.1-complete/js/vendor/what-input.js"></script>
    <script src="../foundation-6.5.1-complete/js/vendor/foundation.js"></script>
    <script src="../foundation-6.5.1-complete/js/app.js"></script>
    <script src="../scripts/jquery-3.4.1.js"></script>
    <script src="../scripts/effects.js"></script>
</body>

</html>