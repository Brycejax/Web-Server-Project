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

    <h1 style="text-align: center; padding: 40px;">Support</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="#">  
                    <!-- need to impliment sql functions on submit -->
                    <input style= "padding: 20px;" class="form-control" type="username" placeholder="reason/title" >
                    <br>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                    <br>
                    <div class="row">
                        <div class="col-md-5"></div>
                        <div class="col-md-4">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

    <?php
    require("footer.php");
    ?>
    
</body>
</html>