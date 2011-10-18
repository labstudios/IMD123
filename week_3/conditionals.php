<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Examples</title>
	<script type=text/javascript>
	var animal = "";
	var x = 12;
	animal = prompt("Please provide an animal.");
	animal = animal.toLowerCase();
	
	if(animal == "cow")
	{
		alert("picture yourself in a pasture");
	}
	</script>
</head>
<body>
	<script type="text/javascript">
	switch(animal)
	{
		case "cow":
			document.write("moo");
		break;
		case "rooster":
		case "chicken":
			document.write("cluck");
		break;
		default:
			document.write("wah");
		break;
	}
	
	</script>
	
	<br /><br />
	<?php
	$i = 0;
	
	while($i < 4)
	{
		echo "yo. ";
		$i++;
	}
	
	for($i = 0;$i < 4;$i++)
	{
		echo "howdy. ";
	}
	
	?>
</body>
</html>