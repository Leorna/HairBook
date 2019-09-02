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
    <div class="top-bar bar-color">
        <div class="top-bar-left text-center">
            <h1>HairBook</h1>
            <h3>Have control about your hair</h3>
            <p class="lead">Take notes about what you do on it</p>
        </div>

        
        <ul class="bar-color menu tabs" data-tabs id="example-tabs">
            <li style="text-align:center;" class="bar-color menu-text tabs-title is-active"><a class="button large" href="#panel1" aria-selected="true">Sign Up</a></li>
            <li style="text-align:center;" class="bar-color menu-text tabs-title"><a class="button large" data-tabs-target="panel2" href="#panel2">Sign In</a></li>
        </ul>
        <ul class="bar-color menu">
            <li class="bar-color menu-text"><a target="_blank" href="https://github.com/Leorna/Hairbook">HairBook github</a></li>
        </ul>
        
    </div>

    <div style="float:left; " class="tabs-content" data-tabs-content="example-tabs">
        <div class="tabs-panel is-active" id="panel1">
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
                    <button type="button" class="bar-color button expanded" id="create-account" onclick="showPwordCreate()">Show passwords</button>
                    <input class="bar-color button expanded" type="submit" value="Sign up">
                </form>
            </div>
        </div>
        <div class="tabs-panel" id="panel2">
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
                    <button type="button" class="bar-color button expanded" id="login" onclick="showPwordLogin()">Show password</button>
                    <input class="bar-color button expanded" type="submit" value="Sign in">
                </form>  
            </div> 
        </div>
    </div>

    <div style="margin: 10px;" class="row">
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
