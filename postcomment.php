<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<hr>
		<?php

			// gets the form data we need
			$file = 'file.txt';
			$comment = $_POST['comment'];

			// stores the data from the form into an array
			// $data = array($name,$email,$comment);
			 $comment . "\n"; 


			// connect to SQL server - user and pass info redacted
			define("SERVER","localhost");
			define("USER","root");
			define("PASS", "");
			define("DEFAULT_DB", "comment");
			$login = @mysqli_connect(SERVER, USER, PASS, DEFAULT_DB); // login to mysql and surpress error messages using the @ operator


			// MySQL query for inserting comments into database -- does not insert if record is already in DB
			$query = "INSERT INTO users(comment) VALUES('$comment')";

			// creates a query with the info from our login and query variables.
			if(mysqli_query($login,$query)){
				echo 'Successfully added comments to database<br>';
			}else{
				echo 'One per person! You\'ve already left comments for this posting.<br>';
			}

			// closes the mysql connection
			mysqli_close($login);

			// echos out to the user their name and comment
			echo "<p>Comments: {$comment} </p>";
		
		?>
		<hr>
		<a href="postedcomments.php">View Posted Comments</a>
			<?php

				// adds the filename as an easy to read variable.
				$filename = 'postcomment.php';
				
				// echos back the date of when the file was last modified.
				?>
	</body>
</html>