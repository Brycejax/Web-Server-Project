<?php
session_start();

$username =$_POST['username']; 
$password = $_POST['password'];

if ((!isset($username)) || (!isset($password))) {
    $_SESSION['fail'] = "Please enter all required fields";
    header("location: ../login.php");
}
else {
    $mysql = mysqli_connect('p3nlmysql13plsk.secureserver.net', 'brycemartin', 'Bison5121bm#', 'brycemartin');
    if(!$mysql) {
      echo "Cannot connect to database.";
      exit;
    }

    $selected = mysqli_select_db($mysql,"brycemartin");
    if (!$selected) {
        echo("Cannot connect to the database");
        exit();
    }

    $query = "SELECT MemberID FROM members WHERE
              Username = '".$username."' AND
              Password = sha1('".$password."');";

    $result = mysqli_query($mysql, $query);

    if(!$result) {
        echo("Cannot run query");
        exit;
    }

    $row = mysqli_fetch_row($result);

    $count = $row[0];

    if($count > 0) {
        //user has access
        //TODO - CREATE SESSION and also pass through user id so we can retrieve notes based on user id
        $_SESSION["userID"] = $count;
        header("location: ../home.php");

    }
    else {
        $_SESSION['fail'] = "No account matches those credentials";
        header("location: ../login.php");
        exit;
    }

}
?>