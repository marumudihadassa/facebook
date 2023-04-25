<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		
		<h2>Comments</h2>
		<?php	
		
		// connect to SQL server - user and pass info redacted
			define("SERVER","localhost");
			define("USER","root");
			define("PASS", "");
			define("DEFAULT_DB", "comment");
			$login = @mysqli_connect(SERVER, USER, PASS, DEFAULT_DB); // login to mysql and surpress error messages using the @ operator

			$query = mysqli_query($login,"SELECT * FROM users ORDER BY name ASC");
				
			if($query){
			
			// advanced escape to output the name and comments in the database
				while($data = mysqli_fetch_assoc($query)){ 
		
		?>
		
		<div class="comment-block">
	
			<p class="comment-comment"><?php echo "Comment: " . $data['comment']; ?></p>
		</div>
		
		<?php 
			}
		}

		?>
		<hr>
		<form class="comment-form" method="post" action="index1.html">
			<input type="hidden" name="comment" value="<?php echo $comment; ?>">
			<input name="submit" type="submit" value="Add New Comment">
		</form><br>
	</body>
</html>