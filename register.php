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

    <h1 style="text-align: center; padding: 40px;">Register</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form action="#">  
                    <!-- need to impliment sql functions on submit -->
                    <input style="padding: 20px;" class="form-control" type="fname" placeholder="first Name" >
                    <br>
                    <input style= "padding: 20px;" class="form-control" type="lname" placeholder="Last Name" >
                    <br>
                    <input style= "padding: 20px;" class="form-control" type="username" placeholder="Username" >
                    <br>
                    <input style= "padding: 20px;" class="form-control" type="password" placeholder="Password" >
                    <br>
                    <input style= "padding: 20px;" class="form-control" type="email" placeholder="Email" >
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="./login.php">Login</a>
                        </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-3">
                            <button class="btn btn-primary" type="submit">Register</button>
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