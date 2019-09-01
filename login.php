<!DOCTYPE html>


<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="foundation-6.5.1-complete/css/foundation.css">
    <link rel="stylesheet" href="foundation-6.5.1-complete/css/app.css">
    <link rel="stylesheet" href="my_styles/style.css">
    <title>HairBook-Login</title>
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
        <form method="post" action="php-scripts/signin.php" class="callout text-center">
            <h2>Sign In</h2>
            <div class="floated-label-wrapper">
                <label for="user-name">User name</label>
                <input type="text" id="full-name" name="user-name" placeholder="User name">
            </div>
            <div class="floated-label-wrapper">
                <label for="pass">Password</label>
                <input type="password" id="passlogin" name="password" placeholder="Password">
            </div>
            <button type="button" class="button expanded" id="login" onclick="showPwordLogin()">Show password</button>
            <input class="button expanded" type="submit" value="Sign in">
        </form>  
    </div> 

    <script src="foundation-6.5.1-complete/js/vendor/jquery.js"></script>
    <script src="foundation-6.5.1-complete/js/vendor/what-input.js"></script>
    <script src="foundation-6.5.1-complete/js/vendor/foundation.js"></script>
    <script src="foundation-6.5.1-complete/js/app.js"></script>
    <script src="scripts/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="scripts/show_hide_password.js"></script>
</body>

</html>