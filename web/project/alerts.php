<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Profile Alerts</title>
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
                <li><a class="bold" href="profile.php">Home</a></li>
                <li><a class="bold" href="aboutus.php">About Us</a></li>
                <li><a class="bold" href="alerts.php">Profile Alerts</a></li>
            </ul>
	      </nav>

	      <article>
           <form action="accountupdate.php" method="post" id="ourform">
		           <fieldset>
                   <?php

                   if ($_SESSION['clearence'] == NULL){
                       echo "<label>Select clearence level:</label>";
                       echo "<select name=\"clearence\">";
                       echo "<option value=\"2\">Warehouse Manager</option>";
                       echo "<option value=\"3\">Warehouse Employee</option>";
                       echo "</select>";
                   }



                   if ($_SESSION['whid'] == NULL){

                       $query = "SELECT * FROM warehouses";
                       $result = pg_query($query);
                       if (!$result) {
                           echo "Problem with query " . $query . "<br/>";
                           echo pg_last_error();
                           exit();

                       }
                       }

                       $myrow = pg_fetch_assoc($result);
                       if ($myrow == FALSE){
                           echo "<h2 class=\"alert\" > No Warehouse Information on the database</h2>";
                       }else{
                           echo "<label>Select Warehouse:</label>";
                           echo "<select name=\"warehouse\">";
                           echo "<option value=\"" . $myrow['warehouseid'] . "\">" . $myrow['whname'] . "</option>";

                           while ($myrow = pg_fetch_assoc($result)){
                               echo "<option value=\"" . $myrow['warehouseid'] . "\">" . $myrow['whname'] . "</option>";
                               }

                           echo "</select>";

                   }

                   ?>

		               <input type="submit" value="Log In" name="submit" id="submit" required="required" />

		</fieldset>
		</form>
	      </article>

	      <footer>
	      </footer>
	  </div>
</body>
</html>
