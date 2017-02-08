<!doctype html>
<html>
    <body>
 <?php 
$db = pg_connect('host=ec2-23-21-238-246.compute-1.amazonaws.com dbname=dbfuplouemrf5 user=itenvwthrjxvzg
 password=fe4517ed2fd76bc283b5c66571a0fb4de965b489b47b2481a8e19bba1a7e399c');

 $query = "SELECT * FROM topic";

 $result = pg_query($query);
 if (!$result){
     echo "Problem with the query " . $query . "<br />";
     echo pg_last_error();
     exit();
 }
        ?>

		<form action="t06Results.php" method="post" id="ourform">
		<fieldset>
		<label>Enter Book Name:</label>
		<input id="book_search" name="book_search" type="text" /><br />
    <label>Enter Chapter:</label>
    <input id="chapter_search" name="chapter_search" type="number" /><br />
    <label>Enter Verse:</label>
    <input id="verse_search" name="verse_search" type="number" /><br />
    <label>Content:</label>
    <textarea rows="5" cols="6"></textarea><br />
    <label for="topic">Topics</label>

    <?php

foreach ( $result as $key => $topic ) { echo '<label for="topic' . $key . '">' . $topic['name'] . '</label>'; echo '<input type="checkbox" name="topic[]"' . $key . '" value="' . $topic['name'] . '" />'; }
    ?>


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
