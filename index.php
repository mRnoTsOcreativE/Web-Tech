<?php
echo "Student Information";
$dom = simplexml_load_file("student.xml");
foreach($dom->student as $h)
{	echo "<h2>Student Name : $h->name</h2>";
	echo "<h2>ID : $h->id</h2>";
	echo "<h2>CGPA : $h->cgpa</h2>";
	echo "<h2><u>Course Taken:</u></h2>";
	echo "<ol>";
	foreach($h->Course->courseno as $c)
	{
		echo "<li> $c->coursename | Section: $c->coursesection | Grade: $c->grade</li>";
	}
	echo "</ol><hr>";
}


?>