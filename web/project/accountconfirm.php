<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Account Confirmation</title>
    <link rel="stylesheet" type="text/css" href="basicstyle.css">
</head>
<body>
  <?php
$db = pg_connect('host=ec2-23-21-238-246.compute-1.amazonaws.com dbname=dbfuplouemrf5 user=itenvwthrjxvzg
 password=fe4517ed2fd76bc283b5c66571a0fb4de965b489b47b2481a8e19bba1a7e399c');

$email = $_POST['email'];
$password = $_POST['password'];

        $query = "SELECT * FROM project.employees WHERE email='". $email . "' AND password='" . $password . "'";

        $result = pg_query($query);
        if (!$result) {
            echo "Problem with query " . $query . "<br/>";
            echo pg_last_error();
            exit();
        }

        $myrow = pg_fetch_assoc($result);
  if ($myrow == FALSE){
      echo "<p>Your Email or Password are incorrect</p> <br />";
      echo "<a href=\"login.php\">Try Again!</a>";
      echo $email;
      echo $password;
  }else{
      $_SESSION['employeeid'] = $myrow['employeeid'];
      $_SESSION['firstn'] = $myrow['firstn'];
      $_SESSION['lastn'] = $myrow['lastn'];
      $_SESSION['clearence'] = $myrow['clearence'];
      $_SESSION['whid'] = $myrow['whid'];
      $_SESSION['email'] = $_POST['email'];


      echo "<p>You have successfully logged in " . $myrow['firstn'] . " " . $myrow['lastn'] . "</p><br />";
      echo "<a href=\"profile.php\">Click here to go to your profile!</a>";
      }
  ?>
</body>
</html>
