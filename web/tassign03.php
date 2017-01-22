<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Team Assignment 03</title>
  </head>
  <body>
    
    <section>
      <form action="assigndisplay.php" method="post">

        <label>Name:</label><br>
        <input type="text" name="name" size="50" required="required">
        <br><br>
        <label>E-mail:</label><br>
        <input type="text" name="email" size="50" required="required">
        <br><br>
        <label>Major:</label><br>
        <?php
        
        // Create a multidimensional array of all the course options with their code
        $courses = array
            (
            array("CS", "Computer Science"),
            array("WDD", "Web Design and Development"),
            array("CIT", "Computer Information Technology"),
            array("CE", "Computer Engineering")
        );
        
        // Generate an html form using php for the course options
        for ($i = 0; $i < 4; $i++) {
            echo '<input type="radio" name="major" value="' . $courses[$i][0] .'" >'.$courses[$i][1] . '<br>';
        }
        ?>

        <br><br>
        <label>Which continents have you visited:</label><br>
        <input type="checkbox" name="continent[]" value="NA">North America<br>
        <input type="checkbox" name="continent[]" value="SA">South America<br>
        <input type="checkbox" name="continent[]" value="EU">Europe<br>
        <input type="checkbox" name="continent[]" value="AU">Australia<br>
        <input type="checkbox" name="continent[]" value="AF">Africa<br>
        <input type="checkbox" name="continent[]" value="AN">Antarctica<br><br>
        <label>Comments:</label> <br>
        <textarea name="comments" rows="10" cols="50" required="required"></textarea>
        <br><br>
        <input type="submit" name="submit" value="Submit"> 
      </form>
    </section>
  </body>
</html>
