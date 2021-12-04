<?php
    session_start();
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

    <h1 style="text-align: center; padding: 40px;">Login</h1>
    <?php
    if (isset($_SESSION['fail']) && !isset($_SESSION['registerSuccess']) && !isset($_SESSION['userID'])) {
        echo '
        <h4 style="text-align: center; padding: 40px; color:red;">'.$_SESSION["fail"].'</h4>
        ';
    }
    if (isset($_SESSION['registerSuccess'])) {
        echo '
        <h4 style="text-align: center; padding: 40px; color:green;">'.$_SESSION["registerSuccess"].'</h4>
        ';
    }
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form method="POST" action="./web_interface/logindb.php">  
                    <!-- need to impliment sql functions on submit -->
                    <input style= "padding: 20px;" class="form-control" type="username" placeholder="Username" name = "username" >
                    <br>
                    <input style= "padding: 20px;" class="form-control" type="password" placeholder="Password" name = "password">
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="./register.php">register</a>
                        </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-3">
                            <button class="btn btn-primary" type="submit">login</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

    <?php
    require("footer.php");
    ?>
    
</body>
</html>