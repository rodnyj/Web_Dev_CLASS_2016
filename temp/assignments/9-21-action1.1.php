<!DOCTYPE html> 
<html>
<head>
<title>
Applications of Array
Activity-09-21
</title>
</head>
<body>

<?php
$str= "Hello World. It is a beautiful day!";
$words = explode(" ", $str);//explode breaks a string into a array
print_r($words);
echo "<br/>";
echo "There are ".count($words)." Words in the string.<br/>";//count words 
echo "There are ".strlen($str)." letters in the string.<br/>";//count letters 

$str = "one, two, three, four, five, six";
print_r(explode(",",$str)); echo"<br/>";
print_r(explode(",",$str,0)); echo"<br/>";
print_r(explode(",",$str,3)); echo"<br/>";
print_r(explode(",",$str,-3)); echo"<br/>";


$filename = "file.txt";
$studentStr = file_get_contents($filename);

$studentList = explode("\n", $studentStr);//break down line by line 
echo "<hr/>";
echo"<table border=1>";
	echo "<tr>";
    	echo "<td> Name </td>";
    	echo "<td> Email </td>";
        echo "<td> Major </td>";
        echo "<td> Grade </td>";
        echo "<td> IP Address </td>";
    echo "</tr>";
    
    $totalGrade=0;    
    for($i=0;$i<count($studentList);$i++)
    {
    	$studentInfo = explode("\t", $studentList[$i]);    
        $totalGrade += $studentInfo[3];
        echo "<tr>";
        	foreach($studentInfo as $value)
            {
            	echo "<td>".$value."</td>";
            }
        echo "</tr>";        
    }
echo "</table>";
printf ("the average grade is %0.2f<br/>",($totalGrade/count($studentList)));

?>


</body>
</html>
