<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
<title>Create Warehouse</title>
<link rel="stylesheet" type="text/css" href="basicstyle.css">
    </head>
    <body>
<?php
$db = pg_connect('host=ec2-23-21-238-246.compute-1.amazonaws.com dbname=dbfuplouemrf5 user=itenvwthrjxvzg
 password=fe4517ed2fd76bc283b5c66571a0fb4de965b489b47b2481a8e19bba1a7e399c');

$warehousen = str_repalce(' ', '_', $_POST['wname']);
$managerid = $_POST['managerid'];
$waddress = $_POST['waddress'];

$query = "INSERT INTO warehouses (managerid, whname, whaddress) VALUES ('$managerid', '$warehousen', '$waddress')";
$result = pg_query($query);
if (!$result) {
    echo "Problem with the query " . $query . "<br />";
    echo pg_last_error();
    exit();
    }

$query = "CREATE TABLE $warehousen (numproducts SERIAL PRIMARY KEY, productid INTEGER REFERENCES products(productid), productn TEXT, instock INTEGER, unitprice FLOAT)";
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
	</nav>
	<article>
      <?php
      echo "Warehouse " . $warehousen . " has been created";
      echo "a href=\profile.php\">Home</a>";
      ?>
	</article>

	<footer>

	</footer>
	</div>
    </body> 
    </html> 
