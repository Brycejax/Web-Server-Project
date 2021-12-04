
  <?php

    if (!isset($_POST['Title']) || !isset($_POST['Content']) 
         || !isset($_POST['noteID']) || !isset($_POST['OwnerID'])) {
       echo "<p>You have not entered all the required details.<br />
             Please go back and try again.</p>";
       exit;
    }

    // create short variable names
    $title=$_POST['Title'];
    $content=$_POST['Content'];
    $noteid=$_POST['noteID'];
    $ownerid=$_POST['OwnerID'];


    @$db = new mysqli('p3nlmysql13plsk.secureserver.net', 'brycemartin', 'Bison5121bm#', 'brycemartin');

    if (mysqli_connect_errno()) {
       echo "<p>Error: Could not connect to database.<br/>
             Please try again later.</p>";
       exit;
    }

    $query = "INSERT INTO notes VALUES (?, ?, ?, ?)";
    $stmt = $db->prepare($query);
    $stmt->bind_param('issi', $noteid, $title, $content, $ownerid);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo  "<p>Note was inserted into the database.</p>";
    } else {
        echo "<p>An error has occurred.<br/>
              The item was not added.</p>";
    }
  
    $db->close();
    header('Location: ../home.php');
  ?>

