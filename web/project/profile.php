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
    <?php
$db = pg_connect('host=ec2-23-21-238-246.compute-1.amazonaws.com dbname=dbfuplouemrf5 user=itenvwthrjxvzg
 password=fe4517ed2fd76bc283b5c66571a0fb4de965b489b47b2481a8e19bba1a7e399c');
?>
	  <div class="container">
	      <header>

	      </header>

	      <nav>
            <ul>
                <li><a class="bold" href="aboutus.php">About Us</a></li>
                <li><a class="bold" href="otheroption.php">Other Options</a></li>
                <li><a class="bold" href="alerts.php">Profile Alerts</a></li>
            </ul>
	      </nav>

	      <article>
            <?php
            echo "<h1>Welcome back " . $_SESSION['firstn'] . " " . $_SESSION['lastn'] . "</h1><br /><br />";

            if ($_SESSION['clearence'] == NULL){
                echo "<h2 class=\"alert\" > You still dont have a clearence level. Please go here to get one</h2>";
                echo "<a href=\"alerts.php\">Profile Alerts</a>";
            }

            if ($_SESSION['whid'] == NULL && $_SESSION['clearence'] != 1){
                echo "<h2 class=\"alert\" > You are not assigned to a warehouse</h2>";
                echo "<a href=\"alerts.php\">Profile Alerts</a>";
                }
            ?>

	      </article>

	      <footer>
	      </footer>
	  </div>
</body>
</html>
