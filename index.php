<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link type="text/css" rel="stylesheet" href="style.css">
</head>
<body>
	

<form action="index.php" method="POST" class="form">
  	<label for="number">Number:</label>
  	<input class="input" type="number"  name="number"><br><br>
  	<label for="procentText">Percent:</label>
  	<input class="input2" type="number"  name="percent"><br><br>
  	<input class="button" type="submit" value="Calculate">
</form>

	<?php 

	if(isset($_POST['number'])) {
		$first = $_POST['number'];
	}
	if(isset($_POST['percent'])) {
		$percent = $_POST['percent'];
	}

		


		if (!empty($first) && !empty($percent)){
			
			$firstIf = $first;
			$percentIf = $percent;
				$answer = $firstIf / 100 * $percentIf;
				$last = $firstIf - $answer;
				
				echo "<br>";

	$tableclose = '</table>';   	


			echo $table = '<table border="2" color=#999999 class="table">';
			echo $caption = '<caption>Calculate</caption>';
			
			while($firstIf > 0){
				if ($first == $percent) {
					echo "<h1 class='h1'>Mistake! It is impossible for the number and percentage to coincide.</h1>";
					echo "<br>";
					break;

				}

				$answer = $firstIf / 100 * $percentIf;
				$last = $firstIf - $answer;
				echo $block = "<tr><td class='td1'>Answer: $last →</td><td class='td2'>Price: $firstIf</td></tr>";
				
				if ($first + 1 < $last) {			

					break;

				}
				$firstIf++;
			}
			echo "$tableclose";
		}

	?> 
	

</body>
</html>

