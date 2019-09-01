<!DOCTYPE html>

<html class="no-js" lang="en" dir="ltr">

<?php 
$error = null;
session_abort(); 
?>
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HairBook</title>
    <link rel="stylesheet" href="foundation-6.5.1-complete/css/foundation.css">
    <link rel="stylesheet" href="foundation-6.5.1-complete/css/app.css">
    <link rel="stylesheet" href="my_styles/style.css">
</head>
  
<body>
    <div class="top-bar">
        <div class="top-bar-left">
            <ul class="menu">
                <li class="menu-text"><a target="_blank" href="https://github.com/Leorna/Hairbook">HairBook github</a></li>
            </ul>
        </div>
    </div>
    <div class="callout large">
        <div class="row column text-center">
            <h1>HairBook</h1>
            <h3>Have control about your hair</h3>
            <p class="lead">Take notes about what you do on it</p>
            <a href="login.php" class="button large">Sign In</a>
            <a href="create-account.php" class="button large hollow">Sign Up</a>
        </div>
    </div>

    <div class="row">
        <div class="medium-6 columns medium-push-6">
            <img class="thumbnail" src="hair.webp">
        </div>
        <div class="medium-6 columns medium-pull-6 text-center">
            <h2>Our selves</h2>
            <p>We are science computer students, who are learning how to make web sites.</p>
        </div>
    </div>

    <script src="foundation-6.5.1-complete/js/vendor/jquery.js"></script>
    <script src="foundation-6.5.1-complete/js/vendor/what-input.js"></script>
    <script src="foundation-6.5.1-complete/js/vendor/foundation.js"></script>
    <script src="foundation-6.5.1-complete/js/app.js"></script>
    <script src="scripts/jquery-3.4.1.js"></script>
    <script src="scripts/effects.js"></script>
</body>

</html>
