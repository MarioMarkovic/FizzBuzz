<!DOCTYPE html>
<html>
<head>
	<title>FizzBuzz - simple solution</title>
</head>
<body>
	<?php
		for($i = 1; $i <= 100; $i++) {
			$str = "<br>";

			($i % 3 !== 0) ? : $str .= "Fizz";
			($i % 5 !== 0) ? : $str .= "Buzz";

			($str !== "<br>") ? : $str .= $i;

			echo $str;
		}
	?>
</body>
</html>

