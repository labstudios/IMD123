<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Untitled Document</title>
	<script type="text/javascript">
		var cities = new Array();
		var holder;
		
		cities.push("Omaha");
		cities.push("Vegas");
		cities.push("LA");
		cities.push("NY");
		
		console.log(cities, cities.length);
		for(var i = 0; i < cities.length; ++i)
		{
			console.log(cities[i]);
		}
		holder = cities.pop();
		console.log("Popped: ", holder);
		console.log(cities, cities.length);
		
		cities.push("Reno");
		console.log(cities.length);
		
		holder = cities.shift();
		console.log("Shifted: ",holder);
		cities.unshift("Draper");
		
		console.log(cities);
	</script>
</head>
<body>
	<pre>
	<?php
		$cities = array("Omaha", "Vegas", "LA", "NY");
		var_dump($cities);
		for($i = 0; $i < count($cities); ++$i)
		{
			echo $cities[$i];
			if($i % 3 == 2)
			{
				echo "*";
			}
			echo "\r\n";
		}
		
		var_dump(array_pop($cities));
		echo count($cities). "\r\n";
		
		array_push($cities, "Reno");
		echo array_shift($cities)."\r\n";
		array_unshift($cities, "Draper");
		var_dump($cities);
	?>
	</pre>
</body>
</html>