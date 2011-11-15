<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Objects</title>
    <script type="text/javascript">
    //var student = {id:12, numClasses:12}; // prefilled object
    var student = new Object();
    var students = new Array();
    var addNewStudent = true;
    addNewStudent = confirm("Add another student?");
    while(addNewStudent)
    {
    	student = new Object();
    	//print "What is the student's name?"
    	//get student.name
    	student.name = prompt("What is the student's name?");
    	student.id = prompt("What is the student's id?");
    	students.push(student);
    	//print "Add another student?"
    	//get addNewStudent
    	addNewStudent = confirm("Add another student?");
    }
    
    </script>
</head>
<body>
    <script type="text/javascript">
    for(var i = 0; i < students.length;++i)
    {
    	//print "Name: " + students[i].name + "\r\n"
    	document.write("Name: " + students[i].name + "<br />\r\n");
    	document.write("ID: " + students[i].id + "<br />\r\n");
    	document.write("<br />\r\n");
    }
    
    </script>
    
    <?php
    $student = new stdClass();
    $students = array();
    
    $student->name = "George Jetson";
    $student->id = 12;
    array_push($students, $student);
    $student = new stdClass();
    $student->name = "Brett Farley";
    $student->id = 413;
    $students[] = $student;
    
    for($i = 0; $i < count($students); ++$i)
    {
    	echo "Name: ".$students[$i]->name."<br />\r\n";
    	echo "ID: ".$students[$i]->id."<br />\r\n";
    	echo "<br />\r\n";
    }
    ?>
</body>
</html>