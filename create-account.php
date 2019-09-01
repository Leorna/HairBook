<!DOCTYPE html>

<html>


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="foundation-6.5.1-complete/css/foundation.css">
    <link rel="stylesheet" href="foundation-6.5.1-complete/css/app.css">
    <link rel="stylesheet" href="my_styles/style.css">
    <title>HairBook-Create</title>
</head>

<body>
    <div class="top-bar">
        <div class="top-bar-left">
            <ul class="menu">
                <li class="menu-text"><a href="index.php">HairBook</a></li>
                <?php
                require "php-scripts/session.php";
                show_error(); 
                ?>
            </ul>
        </div>
    </div>  

    <div class="grid-container">
        <form method="post" action="php-scripts/signup.php" class="callout text-center">
            <h2>Sign Up</h2>
            <div class="floated-label-wrapper">
                <label for="user-name">User name</label>
                <input type="text" id="user-name" name="user-name" placeholder="User name">
            </div>
            <div class="floated-label-wrapper">
                <label for="hair-type">Hair type</label>
                <input type="text" id="hair-type" name="hair-type" placeholder="Hair Type">
            </div>
            <div class="floated-label-wrapper">
                <label for="pass">Password</label>
                <input type="password" id="pass" name="password" placeholder="Password">
            </div>
            <div class="floated-label-wrapper">
                <label for="pass-confirm">Confirm password</label>
                <input type="password" id="pass-confirm" name="confirm-password" placeholder="Confirm password">
            </div>
            <button type="button" class="button expanded" id="create-account" onclick="showPwordCreate()">Show passwords</button>
            <input class="button expanded" type="submit" value="Sign up">
        </form>
    </div>

    <script src="foundation-6.5.1-complete/js/vendor/jquery.js"></script>
    <script src="foundation-6.5.1-complete/js/vendor/what-input.js"></script>
    <script src="foundation-6.5.1-complete/js/vendor/foundation.js"></script>
    <script src="foundation-6.5.1-complete/js/app.js"></script>
    <script type="text/javascript" src="scripts/show_hide_password.js"></script>
</body>

</html>