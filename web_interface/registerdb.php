<?php
session_start();
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

if ((!isset($firstname)) || (!isset($lastname)) || (!isset($username)) || (!isset($password)) || (!isset($email))) {
    $_SESSION['registerFail'] = "Please enter all required fields";
    header("location: ../register.php");
}
else {
    @$db = new mysqli('p3nlmysql13plsk.secureserver.net', 'brycemartin', 'Bison5121bm#', 'brycemartin');

    if (mysqli_connect_errno()) {
       echo "<p>Error: Could not connect to database.<br/>
             Please try again later.</p>";
       exit;
    }

    $query = "INSERT INTO members (FirstName, LastName, Username, Email, Password) VALUES (?,?,?,?,sha1(?));";
    $stmt = $db->prepare($query);
    $stmt->bind_param('sssss', $firstname, $lastname, $username, $email, $password);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        $_SESSION['registerSuccess'] = "Account Created Successfully";
        header("location: ../login.php");
    } else {
        echo "<p>An error has occurred.</p>";
    }
  
    $db->close();
}
?>