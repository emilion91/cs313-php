<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Prove 3 - PHP Survey</title>
  </head>
  <body>
    
    <section>
      <form action="prove3display.php" method="post">
	  

        <label>What color do you prefer?</label><br>
        <?php
        
        
        $colors = array("White", "Blue", "Red", "Orange");
        
      
        for ($i = 0; $i < 4; $i++) {
            echo '<input type="radio" name="colors" value="' . $colors[$i] .'" >'.$colors[$i] . '<br>';
        }
		echo '<br>';
        ?>
		
		<label>What season do you prefer?</label><br>
        <?php
        
        
        $seasons = array("Winter", "Spring", "Fall", "Summer");
        
        
        for ($i = 0; $i < 4; $i++) {
            echo '<input type="radio" name="seasons" value="' . $seasons[$i] .'" >'.$seasons[$i] . '<br>';
        }
		echo '<br>';
        ?>
		
		<label>What food do you prefer?</label><br>
        <?php
        
        
        $foods = array("Pizza", "Pasta", "Salad", "Hamburger");
        
       
        for ($i = 0; $i < 4; $i++) {
            echo '<input type="radio" name="foods" value="' . $foods[$i] .'" >'.$foods[$i] . '<br>';
        }
		echo '<br>';
        ?>
		
		<label>What sport do you prefer?</label><br>
        <?php
        
        
        $sports = array("Soccer", "Tennis", "Basketball", "Ping-pong");
        
        
        for ($i = 0; $i < 4; $i++) {
            echo '<input type="radio" name="sports" value="' . $sports[$i] .'" >'.$sports[$i] . '<br>';
        }
		echo '<br>';
        ?>

       
        <input type="submit" name="submit" value="Submit"> 
      </form>
    </section>
  </body>
</html>