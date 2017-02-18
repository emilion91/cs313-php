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

$pname = str_replace(' ', '_', $_POST['pname']);
$price = $_POST['price'];

$query = "INSERT INTO products (productname, price) VALUES ('$pname', '$price')";
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
    echo "<h3>" . $pname . " has been added</h3><br />";
?>
      <a href="profile.php">Home</a><br />
      <a href="products.php">Products</a><br />
      ?>
	</article>

	<footer>

	</footer>
	</div>
    </body> 
    </html> 
