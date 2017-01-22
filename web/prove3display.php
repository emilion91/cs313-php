<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Prove 3 - Results</title>
  </head>
  <body>
  <span>
  <?php
	echo $_POST['colors'] . '<br>';
	echo $_POST['seasons'] . '<br>';
	echo $_POST['foods'] . '<br>';
	echo $_POST['sports'] . '<br>';
	 switch ($_POST['colors']) {
                      case "White":
					  {		
						
						$white = fopen("white.txt", "x+");
                          if ($white == FALSE){
							  fclose($white);
							  $white = fopen("white.txt", "r");
							  $whitecount = (int)fgets($white);
							  fclose($white);
							  $whitecount++;
							  $white = fopen("white.txt", "w+");
							  fwrite($white, (string)$whitecount);
							  echo fgets($white);
							  fclose($white);
						  } else{
							  fwrite($white, "1");
							  echo fgets($white);
							  fclose($white);
						  }
                          break;
					  }
                      case "Red":{
                     
						$red = fopen("red.txt", "x+");
                          if ($red == FALSE){
							  fclose($red);
							  $red = fopen("red.txt", "r");
							  $redcount = (int)fgets($red);
							  fclose($red);
							  $redcount++;
							  $red = fopen("red.txt", "w+");
							  fwrite($red, (string)$redcount);
							  echo fgets($red);
							  fclose($red);
						  } else{
							  fwrite($red, "1");
							  echo fgets($red);
							  fclose($red);
						  }
                          break;
					  }
                      case "Orange":{
                        
						$Orange = fopen("Orange.txt", "x+");
                          if ($Orange == FALSE){
							  fclose($Orange);
							  $Orange = fopen("Orange.txt", "r");
							  $Orangecount = (int)fgets($Orange);
							  fclose($Orange);
							  $Orangecount++;
							  $Orange = fopen("Orange.txt", "w+");
							  fwrite($Orange, (string)$Orangecount);
							  echo fgets($Orange);
							  fclose($Orange);
						  } else{
							  fwrite($Orange, "1");
							  echo fgets($Orange);
							  fclose($Orange);
						  }
                          break;
					  }
                      case "Blue":{
                          $Blue = fopen("Blue.txt", "x+");
                          if ($Blue == FALSE){
							  fclose($Blue);
							  $Blue = fopen("Blue.txt", "r");
							  $Bluecount = (int)fgets($Blue);
							  fclose($Blue);
							  $Bluecount++;
							  $Blue = fopen("Blue.txt", "w+");
							  fwrite($Blue, (string)$Bluecount);
							  echo fgets($Blue);
							  fclose($Blue);
						  } else{
							  fwrite($Blue, "1");
							  echo fgets($Blue);
							  fclose($Blue);
						  }
                          break;
					  }
			switch ($_POST['seasons']) {
                      case "Winter":
					  {		
						
						$Winter = fopen("Winter.txt", "x+");
                          if ($Winter == FALSE){
							  fclose($Winter);
							  $Winter = fopen("Winter.txt", "r");
							  $Wintercount = (int)fgets($Winter);
							  fclose($Winter);
							  $Wintercount++;
							  $Winter = fopen("Winter.txt", "w+");
							  fwrite($Winter, (string)$Wintercount);
							  echo fgets($Winter);
							  fclose($Winter);
						  } else{
							  fwrite($Winter, "1");
							  echo fgets($Winter);
							  fclose($Winter);
						  }
                          break;
					  }
                      case "Summer":{
                     
						$Summer = fopen("Summer.txt", "x+");
                          if ($Summer == FALSE){
							  fclose($Summer);
							  $Summer = fopen("Summer.txt", "r");
							  $Summercount = (int)fgets($Summer);
							  fclose($Summer);
							  $Summercount++;
							  $Summer = fopen("Summer.txt", "w+");
							  fwrite($Summer, (string)$Summercount);
							  echo fgets($Summer);
							  fclose($Summer);
						  } else{
							  fwrite($Summer, "1");
							  echo fgets($Summer);
							  fclose($Summer);
						  }
                          break;
					  }
                      case "Fall":{
                        
						$Fall = fopen("Fall.txt", "x+");
                          if ($Fall == FALSE){
							  fclose($Fall);
							  $Fall = fopen("Fall.txt", "r");
							  $Fallcount = (int)fgets($Fall);
							  fclose($Fall);
							  $Fallcount++;
							  $Fall = fopen("Fall.txt", "w+");
							  fwrite($Fall, (string)$Fallcount);
							  echo fgets($Fall);
							  fclose($Fall);
						  } else{
							  fwrite($Fall, "1");
							  echo fgets($Fall);
							  fclose($Fall);
						  }
                          break;
					  }
                      case "Spring":{
                          $Spring = fopen("Spring.txt", "x+");
                          if ($Spring == FALSE){
							  fclose($Spring);
							  $Spring = fopen("Spring.txt", "r");
							  $Springcount = (int)fgets($Spring);
							  fclose($Spring);
							  $Springcount++;
							  $Spring = fopen("Spring.txt", "w+");
							  fwrite($Spring, (string)$Springcount);
							  echo fgets($Spring);
							  fclose($Spring);
						  } else{
							  fwrite($Spring, "1");
							  echo fgets($Spring);
							  fclose($Spring);
						  }
                          break;
					  }
			switch ($_POST['foods']) {
                      case "Pizza":
					  {		
						
						$Pizza = fopen("Pizza.txt", "x+");
                          if ($Pizza == FALSE){
							  fclose($Pizza);
							  $Pizza = fopen("Pizza.txt", "r");
							  $Pizzacount = (int)fgets($Pizza);
							  fclose($Pizza);
							  $Pizzacount++;
							  $Pizza = fopen("Pizza.txt", "w+");
							  fwrite($Pizza, (string)$Pizzacount);
							  echo fgets($Pizza);
							  fclose($Pizza);
						  } else{
							  fwrite($Pizza, "1");
							  echo fgets($Pizza);
							  fclose($Pizza);
						  }
                          break;
					  }
                      case "Pasta":{
                     
						$Pasta = fopen("Pasta.txt", "x+");
                          if ($Pasta == FALSE){
							  fclose($Pasta);
							  $Pasta = fopen("Pasta.txt", "r");
							  $Pastacount = (int)fgets($Pasta);
							  fclose($Pasta);
							  $Pastacount++;
							  $Pasta = fopen("Pasta.txt", "w+");
							  fwrite($Pasta, (string)$Pastacount);
							  echo fgets($Pasta);
							  fclose($Pasta);
						  } else{
							  fwrite($Pasta, "1");
							  echo fgets($Pasta);
							  fclose($Pasta);
						  }
                          break;
					  }
                      case "Salad":{
                        
						$Salad = fopen("Salad.txt", "x+");
                          if ($Salad == FALSE){
							  fclose($Salad);
							  $Salad = fopen("Salad.txt", "r");
							  $Saladcount = (int)fgets($Salad);
							  fclose($Salad);
							  $Saladcount++;
							  $Salad = fopen("Salad.txt", "w+");
							  fwrite($Salad, (string)$Saladcount);
							  echo fgets($Salad);
							  fclose($Salad);
						  } else{
							  fwrite($Salad, "1");
							  echo fgets($Salad);
							  fclose($Salad);
						  }
                          break;
					  }
                      case "Hamburger":{
                          $Hamburger = fopen("Hamburger.txt", "x+");
                          if ($Hamburger == FALSE){
							  fclose($Hamburger);
							  $Hamburger = fopen("Hamburger.txt", "r");
							  $Hamburgercount = (int)fgets($Hamburger);
							  fclose($Hamburger);
							  $Hamburgercount++;
							  $Hamburger = fopen("Hamburger.txt", "w+");
							  fwrite($Hamburger, (string)$Hamburgercount);
							  echo fgets($Hamburger);
							  fclose($Hamburger);
						  } else{
							  fwrite($Hamburger, "1");
							  echo fgets($Hamburger);
							  fclose($Hamburger);
						  }
                          break;
					  }
			switch ($_POST['sports']) {
                      case "Soccer":
					  {		
						
						$Soccer = fopen("Soccer.txt", "x+");
                          if ($Soccer == FALSE){
							  fclose($Soccer);
							  $Soccer = fopen("Soccer.txt", "r");
							  $Soccercount = (int)fgets($Soccer);
							  fclose($Soccer);
							  $Soccercount++;
							  $Soccer = fopen("Soccer.txt", "w+");
							  fwrite($Soccer, (string)$Soccercount);
							  echo fgets($Soccer);
							  fclose($Soccer);
						  } else{
							  fwrite($Soccer, "1");
							  echo fgets($Soccer);
							  fclose($Soccer);
						  }
                          break;
					  }
                      case "Basketball":{
                     
						$Basketball = fopen("Basketball.txt", "x+");
                          if ($Basketball == FALSE){
							  fclose($Basketball);
							  $Basketball = fopen("Basketball.txt", "r");
							  $Basketballcount = (int)fgets($Basketball);
							  fclose($Basketball);
							  $Basketballcount++;
							  $Basketball = fopen("Basketball.txt", "w+");
							  fwrite($Basketball, (string)$Basketballcount);
							  echo fgets($Basketball);
							  fclose($Basketball);
						  } else{
							  fwrite($Basketball, "1");
							  echo fgets($Basketball);
							  fclose($Basketball);
						  }
                          break;
					  }
                      case "Tennis":{
                        
						$Tennis = fopen("Tennis.txt", "x+");
                          if ($Tennis == FALSE){
							  fclose($Tennis);
							  $Tennis = fopen("Tennis.txt", "r");
							  $Tenniscount = (int)fgets($Tennis);
							  fclose($Tennis);
							  $Tenniscount++;
							  $Tennis = fopen("Tennis.txt", "w+");
							  fwrite($Tennis, (string)$Tenniscount);
							  echo fgets($Tennis);
							  fclose($Tennis);
						  } else{
							  fwrite($Tennis, "1");
							  echo fgets($Tennis);
							  fclose($Tennis);
						  }
                          break;
					  }
                      case "Ping-pong":{
                          $Pingpong = fopen("Pingpong.txt", "x+");
                          if ($Pingpong == FALSE){
							  fclose($Pingpong);
							  $Pingpong = fopen("Pingpong.txt", "r");
							  $Pingpongcount = (int)fgets($Pingpong);
							  fclose($Pingpong);
							  $Pingpongcount++;
							  $Pingpong = fopen("Ping-pong.txt", "w+");
							  fwrite($Pingpong, (string)$Ping-pongcount);
							  echo fgets($Pingpong);
							  fclose($Pingpong);
						  } else{
							  fwrite($Pingpong, "1");
							  echo fgets($Pingpong);
							  fclose($Pingpong);
						  }
                          break;
					  }
	 }
	?>
	</span>
    <section>
		
	</section>
  </body>
</html>