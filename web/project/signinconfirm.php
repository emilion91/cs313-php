<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
<title>Sign Up Confirmation</title>
<link rel="stylesheet" type="text/css" href="basicstyle.css">
<?php
    $db = pg_connect('host=ec2-23-21-238-246.compute-1.amazonaws.com dbname=dbfuplouemrf5 user=itenvwthrjxvzg
 password=fe4517ed2fd76bc283b5c66571a0fb4de965b489b47b2481a8e19bba1a7e399c');

$firstn = $_POST['firstn'];
$lastn = $_POST['lastn'];
$email = $_POST['email'];
$password = $_POST['password'];

$query="INSERT INTO employees (firstn, lastn, email, password) VALUES ( '$firstn', '$lastn', '$email', '$password')";

$result = pg_query($query);
if (!$result) {
    echo "Problem with query " . $query . "<br/>";
    echo pg_last_error();
    exit();
}

        ?>

    </head>
    <body>
	<div class="container">
	<header>

	</header>

	<nav>
    <ul>
    <li><a class="bold" href="aboutus.php">About Us</a></li>
    <li><a class="bold" href="otheroption.php">Other Options</a></li>
    </ul>
	</nav>
	<article>
    <h1>Account confirm</h1>
    <h2>Please login<h2>
	<form action="accountconfirm.php" method="post" id="ourform">
    <fieldset>
    <label>Email:</label>
    <input id="email" name="email" type="text" required="required" />
    <label>Password:</label>
    <input id="password" name="password" type="password" />
    <input type="submit" value="Log In" name="submit" id="submit" required="required" />
    </fieldset>
    </form>
	</article>

	<footer>
		
	</footer>
	</div>
    </body> 
    </html> 
