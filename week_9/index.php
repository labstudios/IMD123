<?php require_once("sample.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Print Sample</title>
</head>
<body>
    <?php
    	$sample1 = new Sample();
    	$sample2 = new Sample();
    	
    	$sample2->setOutput("Goodbye world!");
    	
    	$sample1->printIt();
    	$sample2->printIt();
    ?>
</body>
</html>