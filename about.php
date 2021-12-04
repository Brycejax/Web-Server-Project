<?php

session_start();
if (!isset($_SESSION['userID'])) {
    header("location: ./login.php");
    $_SESSION['fail'] = "You are Not logged In";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require("./header.php");
    ?>

    <h1 style="text-align: center; padding: 40px;">About Us</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <p>At NoteKeeper, We are dedicated to providing all your notekeeping needs at a custom user experience.</p>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <?php
    require("footer.php");
    ?>
</body>
</html>