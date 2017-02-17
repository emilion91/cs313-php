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

    $clearence = $_POST['clearence'];

    if ($_POST['warehouse'] != NULL){
        $whid = $_POST['warehouse'];

        $query = "UPDATE employees SET clearence = '$clearence', whid = '$whid' WHERE employeeid = '$_SESSION[\'employeeid\']'";
    } else {
$query = "UPDATE employees SET CLEARENCE = '$clearence' WHERE employeeid = '$_SESSION[\'employeeid\']'";
    }

    $result = pg_query($query);
        if (!$result) {
            echo "Problem with query " . $query . "<br/>";
            echo pg_last_error();
            exit();
        }



?>
	  <div class="container">
	      <header>

	      </header>

	      <nav>
            <ul>
                <li><a class="bold" href="profile.php">Home</a></li>
	      <article>
	      </article>

	      <footer>
	      </footer>
	  </div>
</body>
</html>
