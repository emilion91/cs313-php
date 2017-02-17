<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
<title>Sign Up Confirmation</title>
<link rel="stylesheet" type="text/css" href="basicstyle.css">


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
<?php
    $db = pg_connect('host=ec2-23-21-238-246.compute-1.amazonaws.com dbname=dbfuplouemrf5 user=itenvwthrjxvzg
 password=fe4517ed2fd76bc283b5c66571a0fb4de965b489b47b2481a8e19bba1a7e399c');

$firstn = $_POST['firstn'];
$lastn = $_POST['lastn'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM employees WHERE email='". $email ."'";

$result = pg_query($query);
if (!$result) {
    echo "Problem with query " . $query . "<br/>";
    echo pg_last_error();
    exit();
}

$myrow = pg_fetch_assoc($result);
if ($myrow == FALSE){
    $query="INSERT INTO employees (firstn, lastn, email, password, assigned) VALUES ( '$firstn', '$lastn', '$email', '$password', FALSE)";

$result = pg_query($query);
if (!$result) {
    echo "Problem with query " . $query . "<br/>";
    echo pg_last_error();
    exit();
}
    echo "<h1>Account confirm</h1>";
    echo "<h2>Please login<h2>";
	echo "<form action=\"accountconfirm.php\" method=\"post\" id=\"ourform\">";
    echo "<fieldset>";
    echo "<label>Email:</label>";
    echo "<input id=\"email\" name=\"email\" type=\"text\" required=\"required\" />";
    echo "<label>Password:</label>";
    echo "<input id=\"password\" name=\"password\" type=\"password\" />";
    echo "<input type=\"submit\" value=\"Log In\" name=\"submit\" id=\"submit\" required=\"required\" />";
    echo "</fieldset>";
      echo "</form>";
}else{
echo "<p>This email is already in use</p> <br />";
    echo "<a href=\"signin.php\">Try Again!</a>";
}
?>
	</article>

	<footer>
		
	</footer>
	</div>
    </body> 
    </html> 
