<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
<title>Manage Locations</title>
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
    <h1>Locations</h1>
    <fieldset>
        <?php
        $query = "SELECT * FROM warehouses";
        $result = pg_query($query);
        if (!$result) {
            echo "Problem with query " . $query . "<br/>";
            echo pg_last_error();
            exit();
        }

        $myrow = pg_fetch_assoc($result);
        if ($myrow == FALSE){
            echo "<h2 class=\"alert\" >There are no Warehouses in the Database</h2>";
        }else{
            echo "<table style=\"width:100%\">";
            echo "<tr>";
            echo "<th>Name</th>";
            echo "<th>Location</th>";
            echo "<th>Manager</th>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>" . $myrow['whname'] . "</td>";
            echo "<td>" . $myrow['whaddress'] . "</td>";

            $emquery = "SELECT * FROM employees WHERE employeeid='" + $myrow['managerid'] +"'";
            $emresult = pg_query($emquery);
            if (!$emresult) {
                echo "Problem with query " . $query . "<br/>";
                echo pg_last_error();
                exit();
            }
            $emmyrow = pg_fetch_assoc($emresult);

            echo "<td>" . $emmyrow['firstn'] . " " . $emmyrow['lastn'] . "</td>";
            echo "</tr>";

            while ($myrow = pg_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>" . $myrow['whname'] . "</td>";
                echo "<td>" . $myrow['whaddress'] . "</td>";

                $emquery = "SELECT * FROM employees WHERE employeeid='" + $myrow['managerid'] +"'";
                $emresult = pg_query($emquery);
                if (!$emresult) {
                    echo "Problem with query " . $query . "<br/>";
                    echo pg_last_error();
                    exit();
                }
                $emmyrow = pg_fetch_assoc($emresult);

                echo "<td>" . $emmyrow['firstn'] . " " . $emmyrow['lastn'] . "</td>";
                echo "</tr>";
 
            }
            echo "</table>";

        }

?>
    </fieldset>
    <br />
    <br />
    <button tyep="button" onclick="window.location='newwarehouse.php';">Create a Warehouse</button>
	</article>

	<footer>

	</footer>
	</div>
    </body> 
    </html> 
