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
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <!-- create tasks in our database -->
                <form action="#">  
                    <!-- need to impliment sql functions on submit -->
                    <input style= "padding: 20px;" class="form-control" type="Title" placeholder="Title">
                    <br>
                    <textarea style= "padding: 20px;" class="form-control" type="password" placeholder="description" ></textarea >
                    <br>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                </form>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4">
                <p>notes will display here in a grid like system</p>
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