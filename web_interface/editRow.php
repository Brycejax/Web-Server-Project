<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Document</title>
</head>
<body>
	<?php
	require("../header.php");
	?>
	<div class="containter">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<?php
					// create short variable names
					$noteID=$_POST['noteID'];

					//checking the data is formatted correctly for insertion into the database
					if (!get_magic_quotes_gpc()) {
						$noteID = addslashes($noteID);
					}

					// making the connection--remember you need your database info for host, username, password
					@ $db = new mysqli('p3nlmysql13plsk.secureserver.net', 'brycemartin', 'Bison5121bm#', 'brycemartin');

					// checking that the connection was actually made and if not an appropriate message is given
					if (mysqli_connect_errno()) {
						echo "Error: Could not connect to database.  Please try again later.";
						exit;
					}

					//creating the query to insert the variables into table books in the database
					//notice you are using the variables that the data was stored in at the top of the script
					//use the . to concantanate the variables 
					$query = "select * from notes where noteID = '".$noteID."';";

					//run the query and store in $result
					$result = $db->query($query);

					//stores the number of rows returned
					$num_results = $result->num_rows;

					//prints the number of rows returned (which is the number of books for this query)
					if ($num_results <= 0)
					{
						echo "<p>An error was encountered. Please try again.</p></body></html>";
						exit;
					}

					// define a form to update the values
					echo "<form action=\"updateRow.php\" method=\"post\">";	
					echo "<table border=\"0\">";
					
					// Display book information
					$row = $result->fetch_assoc();
					echo "<tr>\n<td>NoteID:</td>";
					echo "<td><input class='form-control' type=\"text\" name=\"noteID\" value=\"".(stripslashes($row['noteID']))."\" /></td>\n</tr>\n";
					echo "<tr>\n<td>Title:</td>";
					echo "<td><input class='form-control' type=\"text\" name=\"Title\" value=\"".htmlspecialchars(stripslashes($row['Title']))."\" /></td>\n</tr>\n";
					echo "<tr>\n<td>Content:</td>";
					echo "<td><textarea style= 'padding: 20px;' id='Content' name='Content' class='form-control' value='".stripslashes($row['Content'])."' type='Content' placeholder='description' ></textarea ></td>";
					echo "<tr>\n<td>OwnerID:</td>";
					?>
					<div class="row">
						<div class="col-md4"></div>
						<div class="col-md-4"></div>
						<div class="col-md-4">
								<?php
								echo "<td><input class='form-control' type=\"text\" name=\"OwnerID\" value=\"".stripslashes($row['OwnerID'])."\" /></td>\n</tr>\n";		
								echo "<tr><td><button class='btn btn-primary' type='submit'>Submit</button></td></tr>";
								echo "</table>\n</form>";
								?>
						</div>
					</div>
				<?php
					//close the database
					$db->close();
				?>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>

	
</body>
</html>
