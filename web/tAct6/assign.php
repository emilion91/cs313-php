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
		<input id="book" name="book" type="text" /><br />
    <br />
    <label>Enter Chapter:</label>
    <input id="chapter" name="chapter" type="number" /><br />
    <br />
    <label>Enter Verse:</label>
    <input id="verse" name="verse" type="number" /><br />
    <br />
    <label>Content:</label><br />
    <textarea rows="5" cols="6" name="content" id="content"></textarea><br /><br />

    <?php

    //foreach ( $result as $name ) { echo '<label for="' . $topic['name'] . '" ' . $key . '">' . $topic['name'] . '</label>'; echo '<input id="topic" type="checkbox" name="topic[]"' . $key . '" value="' . $topic['name'] . '" />'; }

    while($myrow = pg_fetch_assoc($result)){
        echo '<label for="' . $myrow['name'] . '">' . $myrow['name'] . '</label><input id="topic" type="checkbox" name="' . $myrow['name'] . ' value="' . $myrow['id'] . '"><br />';
        }
    ?>
		<input type="submit" value="Insert" name="submit" id="submit"/>
		</fieldset>
		</form>
    </body> 
</html> 
