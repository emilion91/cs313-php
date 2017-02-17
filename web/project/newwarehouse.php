<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
<title>Add A Warehouse</title>
<link rel="stylesheet" type="text/css" href="basicstyle.css">
    </head>
    <body>
<?php
$db = pg_connect('host=ec2-23-21-238-246.compute-1.amazonaws.com dbname=dbfuplouemrf5 user=itenvwthrjxvzg
 password=fe4517ed2fd76bc283b5c66571a0fb4de965b489b47b2481a8e19bba1a7e399c');

$query = "SELECT * FROM employees WHERE clearence = '2' AND assigned='false'"
$result = pg_query($query);
if (!$result) {
    echo "Problem with the query " . $query . "<br />";
    echo pg_last_error();
    exit();
    }
?>
	<div class="container">
	<header>
	</header>

	<nav>
    <ul>
    <li><a class="bold" href="profile.php">Home</a></li>
    <li><a class="bold" href="aboutus.php">About Us</a></li>
    <li><a class="bold" href="alerts.php">Profile Alerts</a></li>
    </ul>
	</nav>
	<article>
    <h1>Welcome to Warehous Creator</h1>
    <h2>Please fill all the fields below<h2>
	<form action="warehouseconf.php" method="post" id="ourform">
    <fieldset>
    <label>Warehouse Name:</label>
    <input id="wname" name="email" type="text" required="required" />
    <label>Select a Manager:</label>
    <select name="managerid">
        <?php
        $myrow = pg_fetch_assoc($result);
        if ($myrow == FALSE){
            echo "<h2 class=\"alert\" >No managers available</h2><br />";
        } else {
            echo "<option value=\"" . $myrow['employeeid'] . "\">" . $myrow['lastn'] . ", " . $myrow['firstn'] . "</option>";
            while($myrow = pg_fetch_assoc($result)){
                echo "<option value=\"" . $myrow['employeeid'] . "\">" . $myrow['lastn'] . ", " . $myrow['firstn'] . "</option>";

                }
}
        ?>
    </select>
    <label>Warehouse Address:</label>
    <input id="waddress" name="email" type="text" required="required" />
    <input type="submit" value="Create" name="submit" id="submit" />
    </fieldset>
    </form>
	</article>

	<footer>
		
	</footer>
	</div>
    </body> 
    </html> 
