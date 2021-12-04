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
    <link rel="stylesheet" type="text/css" href="./styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Project</title>
</head>
<body>
    <!-- navigation -->
    <?php
    require("header.php");
    ?>

    <div class="container">
        <h1 style="text-align: center; padding: 40px;">Welcome to Your Personal Notes</h1>
        <div class="row">
            <div class="col-md-2" style="text-align: center;">
            <form action="./web_interface/delete.php" method="post">  
                    <!-- need to impliment sql functions on submit -->
                    <input style= "padding: 20px; align: left;" id="noteID"  name="noteID" class="form-control" type="Title" placeholder="noteid">
                    <br>
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
                <br>
                <form action="./web_interface/editRow.php" method="post">  
                    <!-- need to impliment sql functions on submit -->
                    <input style= "padding: 20px;" id="noteID"  name="noteID" class="form-control" type="Title" placeholder="noteid">
                    <br>
                    <button class="btn btn-warning" type="submit">Update</button> 
                </form>
            </div>
            <div class="col-md-4">
                <!-- create tasks in our database -->

                <form action="./web_interface/insert_note.php" method="post">  
                    <!-- need to impliment sql functions on submit -->
                    <input style= "padding: 20px;" id="Title" name="Title" class="form-control" type="Title" placeholder="Title">
                    <input style= "padding: 20px;" id="noteID"  name="noteID" class="form-control" type="Title" placeholder="noteid">
                    <input style= "padding: 20px;" id="OwnerID"  name="OwnerID" class="form-control" type="Title" placeholder="OwnerID">
                    <br>
                    <textarea style= "padding: 20px;" id="Content" name="Content" class="form-control" type="Content" placeholder="description" ></textarea >
                    <br>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                </form>
                <br>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4">
                <?php
                require("./web_interface/results.php");
               
                ?>
            </div>
            <div class="col-md-1"></div>
        </div>

    
    </div>
        <?php
        require("footer.php");
        ?>
 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>