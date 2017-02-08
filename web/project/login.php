<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
<title>Warehouse Manager</title>
<link rel="stylesheet" type="text/css" href="basicstyle.css">
</head>
    <body>
	<div class="container">
	<header>
	<
	</header>

	<nav>
		<ul>
			<li><a class="bold" href="aboutus.php">About Us</a></li>
			<li><a class="bold" href="otheroption.php">Other Options</a></li>
		</ul>
	</nav>
	
	<article>
		<h1>Welcome to the Warehouse Manager</h1>
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
