<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
<title>Sign Up</title>
<link rel="stylesheet" type="text/css" href="basicstyle.css">
    </head>
    <body>
        <?php
$db = pg_connect('host=ec2-23-21-238-246.compute-1.amazonaws.com dbname=dbfuplouemrf5 user=itenvwthrjxvzg
 password=fe4517ed2fd76bc283b5c66571a0fb4de965b489b47b2481a8e19bba1a7e399c');

        $query="SELECT * FROM warehouses";

 $result = pg_query($query);
        if (!$result) {
            echo "Problem with query " . $query . "<br/>";
            echo pg_last_error();
            exit();
        }

        ?>
	<div class="container">
	<header>
	</header>

	<nav>
    <ul>
    <li><a class="bold" href="aboutus.php">About Us</a></li>
    <li><a class="bold" href="otheroption.php">Other Options</a></li>
    <li><a class="bold" href="login.php">Log In</a></li>
    </ul>
	</nav>

	<article>
    <h1>Sign Up</h1>
    <h2>Your Information<h2>
	<form action="signinconfirm.php" method="post" id="ourform">
      <fieldset>
<label>First Name:</label>
    <input id="firstn" name="firstn" type="text" required="required" />
<label>Last Name:</label>
    <input id="lastn" name="lastn" type="text" required="required" />
    <label>Email:</label>
    <input id="email" name="email" type="text" required="required" />
    <label>Password:</label>
    <input id="password" name="password" type="password" />
<label>Confirm Passwork:</label>
    <input id="passconf" name="passconf" type="text" required="required" />
    <label>Warehouse:</label>
    <select name="warehouse">
<?php

//while($myrow = pg_fetch_assoc($result)){
//echo "<option value="$myrow['warehouseid']">"$myrow['whname']"</option>"
//}
?>
    </select>
    <input type="submit" value="Sign Up" name="submit" id="submit" required="required" />
    </fieldset>
    </form>
	</article>

	<footer>
		
	</footer>
	</div>
    </body> 
    </html> 