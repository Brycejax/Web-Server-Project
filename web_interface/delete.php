
    <?php
    $noteid = $_POST['noteID'];

    if (!$noteid) {
        echo "<p>You have not entered the noteID. Please try again</p>";
        exit;
    }

    //connection
    @ $db = new mysqli('p3nlmysql13plsk.secureserver.net', 'brycemartin', 'Bison5121bm#', 'brycemartin');

    //check connection
    if ($db->connect_error) {
        die("Connection Failed: ". $db->connect_error);
    }

    $sql = "DELETE FROM notes WHERE noteID = '".$noteid."';";

    if ($db->query($sql) === TRUE) {
        echo "Record deleted Successfully";
    } 
    else {
        echo "Error Deleting record: ". $db->error;
        exit;
    }

    $db->close();
    sleep(5);
    header('Location: ../home.php');
    exit;
    ?>