<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>

<!-- div that wraps all od our contents -->
<div style="width:60%;margin:auto;">
<h1>Grade Query System</h1>

<form method="post" action="/ITEC4450/Lab4.php">
<p><span class="error">* required field.</span></p>

Query by: 
<select name="query">
  <option value="Name" >Name</option>
  <option value="Major" >Major</option>
  <option value="Grade"  >Grade</option>
</select> <br/><br/>

Type the Name, Major or Grade that you want to search: <input type="text" name="search" 
value = ""
><span class="error">*
</span><br/><br/>
<input type=submit>
</form>
<hr/>

</div>

<!-- php code starts here ----------------------------------------------------->

<?php

$str = " Hello world. It's a beautoful day!";
echo $str;

$words = explode(" ", $str);
print_r($words);
echo "<br/>";
echo "There are ".count($words)." words in the string. <br/>";
echo "There are ".strlen($str)." letters in the string<br/>";

/* demostrates what explode function does
$str = 'one,two,three,four,five,six';
print_r(explode(',', $str)); echo "THIS1<br>";
print_r(explode(',', $str, 0)); echo "THIS1<br>";
print_r(explode(',', $str, -3)); echo "THIS3<br>";

*/

//create/open file with that name

$filename = "file.txt";
$studentStr = file_get_contents($filename);

$studentList = explode("\n", $studentStr);//break down line by line 

//sort($studentList);
/*
	for($i=0; $i < count($studentList); $i++);
    {
    	$studentInfo =explode("\t", $studentList[$i]);
        $studentList[$i] = $studentInfo[3]. "\t".$studentInfo[1].
        					"\t".$studentInfo[2]. "\t".$studentInfo[0].
                            "\t".$studentInfo[1];
    }
*/
//sort($studentList, 1);


//prints out table headers
echo "<hr/>";
echo"<table border=1>";
	echo "<tr>";
    	echo "<td> Name </td>";
    	echo "<td> Email </td>";
        echo "<td> Major </td>";
        echo "<td> Grade </td>";
        echo "<td> IP Address </td>";
    echo "</tr>";

//loops to print out rest of table with information

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
    
echo"</table>";

//prints out total grade
//printf("The average grades is: %0.2f<br/>", $totalGrade/count($studentList));
?>

</body>

</html>