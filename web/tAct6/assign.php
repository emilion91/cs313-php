<!doctype html>
<html>
    <body>
		<form action="t05Results.php" method="post" id="ourform">
		<fieldset>
		<label>Enter Book Name:</label>
		<input id="book_search" name="book_search" type="text" />
    <label>Enter Chapter:</label>
    <input id="chapter_search" name="chapter_search" type="number" />
    <label>Enter Verse:</label>
    <input id="verse_search" name="verse_search" type="number" />

		<input type="submit" value="Insert" name="submit" id="submit"/>
		</fieldset>
		</form>
		<?php
		
			if(isset($_POST["submit"])){
				echo "HIT";
				$book = $_POST["book_search"];
				$search_query = "SELECT * FROM Scriptures WHERE book= '%".$book."%'"; 

				$search_result = pg_query($search_query); 
				if (!$search_result) { 
					echo "Problem with query " . $search_query . "<br/>"; 
					echo pg_last_error(); 
					exit(); 
				} 
				while($row = pg_fetch_assoc($search_result)) {
				printf ("<strong>%s %s: %s - </strong> \"%s\" <br>",htmlspecialchars($myrow['book']), htmlspecialchars($myrow['chapter']), htmlspecialchars($myrow['verse']), htmlspecialchars($myrow['content']));
				}
				
			}
		
		?>
    </body> 
</html> 
