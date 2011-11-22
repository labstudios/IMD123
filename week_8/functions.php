<?php
$names = array("Fred", "George", "Wilma", "Paul", "Betty");

function printNames($names)
{
	for($i = 0; $i < count($names); ++$i)
	{
		echo $names[$i]."<br />\r\n";
	}
}

printNames($names);

if(count($names) > 3){
	
?>
<p>There are a lot of names.</p>
<?php
}
?>