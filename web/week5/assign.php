<!doctype html>
<html> 
    <body> 
        <?php 
$db = pg_connect('host=ec2-23-21-238-246.compute-1.amazonaws.com dbname=dbfuplouemrf5 user=itenvwthrjxvzg
 password=fe4517ed2fd76bc283b5c66571a0fb4de965b489b47b2481a8e19bba1a7e399c');

        $query = "SELECT * FROM Scriptures"; 

        $result = pg_query($query); 
        if (!$result) { 
            echo "Problem with query " . $query . "<br/>"; 
            echo pg_last_error(); 
            exit(); 
        } 

        while($myrow = pg_fetch_assoc($result)) { 
            printf ("<strong>%s %s: %s - </strong> \"%s\" <br>",htmlspecialchars($myrow['book']), htmlspecialchars($myrow['chapter']), htmlspecialchars($myrow['verse']), htmlspecialchars($myrow['content']));
        } 
        ?> 
		<form action="t05Results.php" method="post" id="ourform">
		<fieldset>
		<label>Enter Book Name:</label>
		<input id="book_search" name="book_search" type="text" />
		<input type="submit" value="Search" name="submit" id="submit"/>
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