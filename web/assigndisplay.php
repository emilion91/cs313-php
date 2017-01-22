<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Team Assignment 03</title>
  </head>
  <body>
      <?php include 'modules/header.php'; ?>
      <?php include 'modules/nav.php'; ?>
    <section>
        <?php include 'control.php'; ?>


      <label>Students Name:</label> <br>
      <span><?php echo " - " . htmlspecialchars($_SESSION['name']); ?></span><br><br>

      <label>Students Email Address:</label> <br>
      <span><?php echo " - " . htmlspecialchars($_SESSION['email']); ?></span><br><br>

      <label>Students Major:</label> <br>
      <span><?php echo " - " . $_SESSION['major']; ?></span><br><br>

      <label>Continents Visited:</label><br>
      <span><?php
          $continent = $_SESSION['continent'];
          if ($continent !== NULL) {
              for ($i = 0; $i < 6; $i++) {
                  switch ($continent[$i]) {
                      case "NA":
                          echo " - North America <br>";
                          break;
                      case "SA":
                          echo " - South America <br>";
                          break;
                      case "EU":
                          echo " - Europe <br>";
                          break;
                      case "AU":
                          echo " - Australia <br>";
                          break;
                      case "AF":
                          echo " - Africa <br>";
                          break;
                      case "AN":
                          echo " - Antarctica <br>";
                          break;
                  }
              }
          }
  
            ; ?></span><br><br>

          <label>Students Comments:</label> <br>
          <span><?php echo " - " . $_SESSION['comments']; ?></span><br>

        </section
    <?php include 'modules/footer.php'; ?>
  </body>
</html>
