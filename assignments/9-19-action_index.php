<html>
<head>
<title> Activity 9-19 </title>
</head>
<body>
<?php
//to study
// multi dimension arrays, and random



$studentinfo = array(
array("Mike", 22, "Male"),
array("Jason", 18, "Male"),
array("Jen", 5, "Female"),
array("Megan", 60, "Female")
);

echo "Display one by one";
echo "<hr/>";
echo $studentinfo[0][0]. " is a ". $studentinfo[0][2]. " student, and is ". $studentinfo[0][1];

echo "<br/>";
echo $studentinfo[3][0]. " is a ". $studentinfo[3][2]. " student, and is ". $studentinfo[3][1];

echo "Display using a loop";
echo "<hr/>";

for($row=0;$row<4;$row++)
{	
	echo "<p><b> Row#: $row</b><p>";
    echo "<ul>";
    for($col=0;$col<3;$col++)
    	echo "<li>".$studentinfo[$row][$col]."</li>";
      echo "</ul>";

}
$studentinfo[4][0] = "Tom"; $studentinfo[4][1] = 35; $studentinfo[4][2] = "Male";
$studentinfo[5][0] = "Sally"; $studentinfo[5][1] = 30; $studentinfo[5][2] = "Female"; 

echo "Display using nested loops with count()<br/>";
echo "<hr/>";

$nrow = count($studentinfo);
for($row=0;$row<$nrow;$row++)
{	
	echo "<p><b> Row#: $row</b></p>";
    echo "<ul>";
    $ncol = count($studentinfo[$row]);
    //echo $ncol;
    for($col=0;$col<$ncol;$col++)
    	echo "<li>".$studentinfo[$row][$col]."</li>";
      echo "</ul>";
}

echo "Display using foreach loop<br/>";
echo "<hr/>";

foreach($studentinfo as $index =>$person){
	echo "<p><b> Row#: $index</b></p>";
    echo "<ul>";
	foreach($person as $value)
      echo "<li>".$value."</li>";
      echo "</ul>";
}

//Copy whats in $studentinfo into $student_names
foreach($studentinfo as $i=>$person)
	$student_names[$i] = $person[0];
    
echo "sorted by ascending order";
echo "<hr/>";

sort($student_names);
foreach($student_names as $name)
echo "Name:. ".$name."<br/>";

echo "sorted by descending order";
echo "<hr/>";

rsort($student_names);
foreach($student_names as $name)
echo "Name:. ".$name."<br/>";

$fav=array("Mike"=>"red", "Steve"=>"green", "Lissy"=>"blue");
echo "Sort associative arrays in assending order accorting to the values";
echo"<hr/>";
asort($fav);
foreach($fav as $key=>$f)
echo $key. "'s favorite is ". $f . "<br/>";

echo "Sort associative arrays in descending order accorting to the values";
echo"<hr/>";
krsort($fav);
foreach($fav as $key=>$f)
echo $key. "'s favorite is ". $f . "<br/>";
echo "<hr>";

echo "sort multiple dimension arrays";
sort($studentinfo);
foreach($studentinfo as $index =>$person){
	echo "<p><b> Row#: $index</b></p>";
    echo "<ul>";
	foreach($person as $value)
      echo "<li>".$value."</li>";
      echo "</ul>";
}

$key = array_rand($fav, 1);
echo $fav[$key]."<br/>";



?>
</body>
</html>