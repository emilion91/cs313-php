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
           <form action="accountconfirm.php" method="post" id="ourform">
		           <fieldset>

		               <label>Email:</label>

		               <input id="email" name="email" type="text" required="required" />

                   <label>Password:</label>

                   <input id="password" name="password" type="password" />

		               <input type="submit" value="Log In" name="submit" id="submit" required="required" />
                   
		</fieldset>
		</form>
	      </article>

	      <footer>
	      </footer>
	  </div>
</body>
</html>
