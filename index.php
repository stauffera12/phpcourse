<?php include("variables.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
	<?php include("navbar.php"); ?>
  <br/>
  <center>
    <h1>
	
		<?php

			// Print out to the screen
			echo "Hello World!<br/>";
			$first_name = "Austin";
			$favorite_number = 12;

			echo $first_name;
			
			echo "<br/>";
			
			//Math Operators
			// + - * / % **
			$num1 = 41;
			$num2 = 4;
			echo $num1 + $num2;
			
			echo "<br/>";
			
			//Increment
			$num3 = 50;
			echo ++$num3;
			
			echo "<br/>";
			
			//Important to note where you but the increment mark, below you will see it changes the value of $num4 after it posts. This is because the placement of -- is behind the $num4
			$num4 = 50;
			echo $num4--;
			echo " ";
			echo $num4;
			
			echo "<br/>";
			
			//Concantenation
			$first_name1 = "John";
			$last_name1 = "Elder";
			
			echo $first_name1 . " " . $last_name1;
			
			echo "<br/>";
			
			//Comparison Operators
			/* == Equal to
				!= Not Equal to
				> Greater Than
				< Less Than
				>= Greater Than or Equal to
				<= Less Than or Equal To
			*/
			
			$num_1 = 41;
			$num_2 = 4;
			
			var_dump($num_1 == $num_2);
			
			echo "<br/>";
			
			//Escape Characters
			echo "And then she said: \"YOU'RE UGLY!\"";
			
			echo "<br/>";
			
			//If Else Statements
			$first_name2 = "Bob";
			
			if ($first_name2 == "Austin") {
				echo "Hello Austin! How are you?";
			} else {
				echo "You're not Austin! Who are you?";
			}
			
			echo "<br/>";
			
			//Elseif Statements
			$num_A = 40;
			$num_B = 2;
			
			if ($num_A > 100) {
				echo $num_A . " is greater than 10";
			} elseif ($num_B == 5) {
				echo $num_B . " equals 5!";
			} else {
				echo $num_A . " is less than 100";
			}
			
			echo "<br/>";
			
			//Numeric Arrays
			$last_names = array("Elder", "Smith", "Poppins");
			$first_names = array("John", "Steve", 40, $last_names);
			echo ++$first_names[2];
			
			echo "<br/>";
			
			
			echo $first_names[3][0];
			
			echo "<br/>";
			
			//Associative Arrays
			//Instead of using the number placement like above, we call the name of the person below (key) and the action returns Pepperoni (value). Key value pairs.
			$fav_pizza = array(
				"John"=>"Pepperoni",
				"Steve"=>"Cheese",
				"Mary"=>"Mushroom"
			);
			
			echo $fav_pizza["John"];
			
			echo "<br/>";
			
			//Array Count
			$fav_pizza = array(
				"John"=>"Pepperoni",
				"Steve"=>"Cheese",
				"Mary"=>"Mushroom"
			);
			
			echo count($fav_pizza);
			
			echo "<br/>";
			
			$names = array("John", "Steve", "Mary");
			echo count($names);
			
			echo "<br/>";
			//If you don't know what the last item in the array is because you don't know how many items are in the array
			echo $names[count($names) - 1];
			
			echo "<br/>";
			
			//Loops -- While
			$counter = 0;
			while ($counter <= 10){
				echo "The count is: $counter<br/>";
				++$counter;
			}
			
			echo "<br/>";
			
			//Loops -- For
			for ($counterA = 0; $counterA <= 10; $counterA++){
				echo "The count is $counterA <br/>";
			}
			
			echo "<br/>";
			
			//Loops -- Foreach
			$namesC = array("John", "Steve", "Mary");
			
			foreach ($namesC as $value){
				echo "$value<br/>";
			}
			
			echo "<br/>";
			
			//Functions
			function helloThere($factorX, $factorY) {
				return $factorX + $factorY;
			}
			$answer = helloThere(49, 1);
			echo $answer * 1.1;
			
			echo "<br/>";
			
			//Random Function
			rand(0,100);
			//little bit better function for random numbers
			mt_rand(0,10);
			
			$things = array("John", "Steve", "Mary");
			$rando = mt_rand (0,2);
			echo $things[$rando];
			
			echo "<br/>";
			
			//Date Function - find the parameters on php.net function list
			$todays_day = date('l jS \of F, Y');
				echo "Today is $todays_day";
				
			echo "<br/>";
			
			//String Manipulation Functions
			$stuff = "Austin is a php coding monster";
			$monster = "monster";
			$dork = "weirdo";
			//The first posiition is the current or old value, the second position is the new value you want, the last position is the variable we are making changes to
			echo str_replace("$monster", "$dork", $stuff);
			
			echo "<br/>";
			
			echo strtoupper($stuff);
			
			echo "<br/>";
			
			echo ucwords($stuff);
			
			echo "<br/>";
			
			echo strlen($stuff);
			
			echo "<br/>";
			
			//Include function
			//see doc footer.php
			include("footer.php");
			
			
			
		?>
	</h1>
	</center>
    
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>




