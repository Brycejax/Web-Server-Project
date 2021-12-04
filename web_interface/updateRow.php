
<?php
	// create short variable names
	$noteID = $_POST['noteID'];
	$title=$_POST['Title'];
	$content=$_POST['Content'];
	$OwnerID=$_POST['OwnerID'];

	
	//checking the data is formatted correctly for insertion into the database
	if (!get_magic_quotes_gpc()) {
		$noteid = intval($noteID);
		$title = addslashes($title);
		$content = addslashes($content);
	}
	
	// making the connection--remember you need your database info for host, username, password
    @ $db = new mysqli('p3nlmysql13plsk.secureserver.net', 'brycemartin', 'Bison5121bm#', 'brycemartin');
	
	// checking that the connection was actually made and if not an appropriate message is given
	if (mysqli_connect_errno()) {
		echo "Error: Could not connect to database.  Please try again later.";
		exit;
	}
	
	// Determine if the user changed the isbn of the book.
	// If they did, create a new entry in the database using the current values
	// If they did not, update the current entry with the new values
	
	$checkQuery = "select * from notes where noteID = '".$noteID."';";
	$checkResult = $db->query($checkQuery);
	if ($checkResult)
	{
		if ($db->affected_rows > 0)
		{
			$query = "update notes set Title = '".$title."',
									Content = '".$content."',
									OwnerID = '".$OwnerID."'
			where noteID = '".$noteID."';";

			// $query = "update Magazines set author = '".$author."',
			// 						 title = '".$title."',
			// 						 price = '".$price."'
			// 		where isbn = '".$isbn."';";


			//run the query and store in $result
			$result = $db->query($query);
			
			//lets you know how many rows were inserted into the database or an error if there was an error
			if ($result)
			{
				echo  $db->affected_rows." Note updated.";
			}
			else
			{
				echo " something is wrong when running the query";
			}
		}
		else
		{
			$insertQuery = "insert into notes values
            	('".$noteID."', '".$title."', '".$content."','".$OwnerID."')";
            	
			//run the query and store in $result
			$insertResult = $db->query($insertQuery);

			//lets you know how many rows were inserted into the database or an error if there was an error
			if ($insertResult) 
			{
				echo  $db->affected_rows." note inserted into database.";
			}
		}
	}
	else
	{
		echo "An error has occurred. No changes were made.";
	}
	
	//close the database
	$db->close();

	//sleep(5);
	header('Location: ../home.php');
?>
