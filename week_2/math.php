<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Math</title>
	<script type="text/javascript">
		var six = 9 - 3;
		var numCards = 5 * 17;
		//Swap Example
		var a = 2;
		var b = 6;
		var c;
		
		c = a;
		a = b;
		b = c;
		
		//String Contatenation
		var fname = "Bob";
		var lname = "Marks";
		
		//alert(fname + " said, \"My last name is " + lname + ".\"\r\n\tAnd then stormed out of the room.");
		
		//Subtraction example
		var numA;
		var numB;
		var answer;
		
		
		numA = prompt("Give me a number");
		numB = prompt("Give me another number");
		answer = numA - numB;
		alert(numA + " - " + numB + " = " + answer);
	</script>
	
</head>
<body>
	<?php
		$fname = "Bob";
		$lname = "Marks";
		
		echo $fname . " " . $lname . "<br />" . "\r\n\tHi there!\r\n";
	?>
	<pre>
		<?php 
			echo "Yoda!\r\nVader\r\nSome other guy. . .";
		?>
	</pre>
</body>
</html>