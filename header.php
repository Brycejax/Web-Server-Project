<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Project</title>
</head>
<body>

    <!-- navigation -->
    <div class="header">
        <nav class = "navbar navbar-expand-md navbar-dark  sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="./home.php"><h1 style="font-family= Impact, fantasy;">NoteKeeper</h1></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                    <span class = "navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="./home.php" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="./about.php" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="./support.php" class="nav-link">Support</a>
                        </li>
                        <?php
                            if (!isset($_SESSION["userID"])) {
                                echo '
                                    <li class="nav-item">
                                        <a href="./login.php" class="nav-link">Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./register.php" class="nav-link">Register</a>
                                ';
                            }
                        ?>
                        <?php
                        if (isset($_SESSION['userID'])) {
                            echo '
                            <li class="nav-item">
                            <a href="./web_interface/logout.php" class="nav-link">Logout</a>
                            </li>
                            ';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>