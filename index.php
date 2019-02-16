<!DOCTYPE html>
<html>
<head>
	<title>Fizz buzz - simple solution</title>
</head>
<body>
	<?php
		for($i = 1; $i <= 100; $i++) {
			if($i % 3 == 0 && $i % 5 == 0) {
				echo "Fizz buzz!<br>";
			} else {
				if($i % 3 == 0) {
					echo "Fizz! <br>";
				} else if($i % 5 == 0) {
					echo "Buzz!<br>";
				} else {
					echo $i . "<br>";
				}

			}
		}
	?>
</body>
</html>

