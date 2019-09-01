<!DOCTYPE html>

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
                <li class="menu-text">HairBook</li>
                <li class="menu-text"><button><a class="button hairbook-elements" href="hairbook.php">Cancel</a></button></li>
            </ul>
        </div>
    </div>

    <div class="grid-container">
        <?php
        $user = $_POST["user"];
        $id = $_POST["id"];
        $title = $_POST["title"];
        $note = $_POST["note"];
        
        echo <<<EOT
        <form method="post" action="add-changes.php" class="callout text-center">
            <div class="grid-container">
                <input type="hidden" name="user" value="{$user}">
                <input type="hidden" name="id" value="{$id}">
                <label for="title">Title</label>
                <input name="title" type="text" value="{$title}">
                <textarea name="note" cols="30" rows="10">{$note}</textarea>
            </div>
            <input class="button" type="submit" value="Save">
        </form>
        EOT;
        ?>
    </div>

    <script src="../foundation-6.5.1-complete/js/vendor/jquery.js"></script>
    <script src="../foundation-6.5.1-complete/js/vendor/what-input.js"></script>
    <script src="../foundation-6.5.1-complete/js/vendor/foundation.js"></script>
    <script src="../foundation-6.5.1-complete/js/app.js"></script>
</body>

</html>