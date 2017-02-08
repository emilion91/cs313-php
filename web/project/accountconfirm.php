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

  $email = $_SESSION['email'];
  $password = $_SESSION['password'];

echo $email;
echo $password;

        $query = "SELECT * FROM employees WHERE email='". $email . "' AND password='" . $password . "'";

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
      echo $_SESSION['email'];
      echo $_SESSION['password'];
  }else{
      echo "<p>You have successfully logged in</p><br />";
      }
  ?>
</body>
</html>
