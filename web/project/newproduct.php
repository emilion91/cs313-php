<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
<title>Add A Product</title>
<link rel="stylesheet" type="text/css" href="basicstyle.css">
    </head>
    <body>

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
    <h1>Add a new product</h1>
    <h2>Please fill all the fields below<h2>
	<form action="productconf.php" method="post" id="ourform">
    <fieldset>
    <label>Product Name:</label><br />
    <input id="pname" name="pname" type="text" required="required" /><br />
    <label>Listed price:</label><br />
    <input id="price" name="price" type="number" required="required" step="any" min="0.01" /><br />    
    <input type="submit" value="" name="submit" id="submit" />
    </fieldset>
    </form>
	</article>

	<footer>
		
	</footer>
	</div>
    </body> 
    </html> 
