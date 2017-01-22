<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Team Assignment 03</title>
	</head>
	
	<body>
		<section>
			<form action="displayform.php" method="post">
				<label>Name:</label><br />
				<input type="text" name="name" size="40" required="required">
				<br /><br />
				<label>E-mail:</label><br />
				<input type="text" name="email" size="40" required="required">
				<br /><br />
				<label>Major:</label>
				
				<?php
				
				$courses = array(
				array("CS", "Computer Science"),
				array("WD", "Web Design and Development"),
				array("CIT", "Computer Information Technology"),
				array("CE", "Computer Engineering"));
				
				for($i = 0; $i < 4; $++){
					echo "<input type="radio" name="major" value="' . $courses[$i][0] .
					'">".$courses[$i][1] . '<br />';}
				?>
				
				<br /><br />
				<label>Which continent have you visited:</label><br />
				<input type="checkbox" name="continent[]" value="NA">North America<br />
				<input type="checkbox" name="continent[]" value="SA">South America<br />
				<input type="checkbox" name="continent[]" value="EU">Europe<br />
				<input type="checkbox" name="continent[]" value="OC">Oceania<br />
				<input type="checkbox" name="continent[]" value="AS">Asia<br />
				<input type="checkbox" name="continent[]" value="AF">Africa<br />
				<br />
				<label>Comments:</label><br />
				<textarea name="comments" rows="10" cols="40" required="required"></textarea>
				<br /><br />
				<input type="submit" name="submit" value"Submit">
			</form>
		</section>
	</body>
</html>