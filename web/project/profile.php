<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Warehouse
        <?php

        switch ($_SESSION['clearence']){
            case "1";
                echo "General Manager";
                break;
            case "2";
                echo "Manager";
                break;
            default;
                echo "Employee";

        ?></title>
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
      <?php
      echo "Welcome back " . $_SESSION['firstn'] . " " . $_SESSION['lastn'] . "<br />";
      ?>
	
	</article>

	<footer>
		
	</footer>
	</div>
    </body> 
    </html> 
