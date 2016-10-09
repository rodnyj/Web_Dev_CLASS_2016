<html>
<head><title>Activity-09-12</title></head>
<body>

<?php

echo "Today is ". date("m/d/Y")."<br/>";

echo "Today is ". date("m/d/y")."<br/>";

echo "Today is ". date("M/d/Y")."<br/>";

echo "Today is ". date("m/D/y")."<br/>";

echo "Today is ". date("Y/M/y")."<br/>";

echo "Today is ". date("d \of m \of Y  ")."<br/>";

$day1=strtotime("July 4 1999");

echo "<hr>";
/////////////////////////////////////////////////////////////////////

//echo "<br/>".$day1; 

echo date("m/d/Y",$day1)."<br/>";
echo "<hr>";

echo "SET TIME";
echo "<br>";


echo "Now is ".date("h:i:s")."<br/>";

echo "Now is ".date("h:i:sa")."<br/>";

echo "Now is ".date("h\:I:sA")."<br/>";

echo "Now is ".date("H\:i:sA")."<br/>";

echo "Now is ".date("h\:i:sA")."<br/>";

echo "Now is ".date("h\:i:SA")."<br/>";
echo "<hr>";
/////////////////////////////////////////////////////////////////////

//set time zone
echo "Setting Degault Timezone and Time<br/>";

date_default_timezone_set("America/Los_Angeles");
echo "Now is ".date("h:i:sa")."<br/>";
echo "<hr>";

//about the day

echo "SETTIG DAYS<BR>";
echo "Today is ".date("l")."<br/>";

echo "Today is ".date("L")."<br/>";//no goood

echo "Today is ".date("w")."<br/>";
echo "<hr>";
/////////////////////////////////////////////////////////////////////

//make a time
$d1= mktime(11, 14, 58, 8, 24, 2011);
echo "The created date is: ".date("Y-m-d h:i:sa", $d1)."<br/>";


$d1 = strtotime("10:30pm April 15 2014");

echo "Created date is ". date("Y-m-d h:i:sa",$d1)."<br/>";

$d2 = strtotime("tomorrow");
echo "Created date is ". date("Y-m-d h:i:sa",$d2)."<br/>";

$d3 = strtotime("Saturday");
echo "Created date is ". date("Y-m-d h:i:sa",$d3)."<br/>";

$d4 = strtotime("next Saturday");
echo "Created date is ". date("Y-m-d h:i:sa",$d4)."<br/>";


$d5 = strtotime("+1 week");
echo "Created date is ". date("Y-m-d h:i:sa",$d5)."<br/>";

$d6 = strtotime("+3 months");
echo "Created date is ". date("Y-m-d h:i:sa",$d6)."<br/>";
echo "<hr>";
/////////////////////////////////////////////////////////////////////

//count down
$d1 = strtotime("July 04 2017");
$days = ceil(($d1 - time())/60/60/24);
echo "There are ", $days." until the date you specified <br/>";
echo "<hr>";
/////////////////////////////////////////////////////////////////////

//create a calendar for a given month

$d1 = strtotime("August 01, 2016");

echo "Calendar for ".date("M \of Y", $d1)."<br/>";

echo "<table border=1>";

echo "<tr><td>Su</td><td>Mo</td><td>Tu</td><td>We</td><td>Th</td><td>Fr</td><td>Sa</td></tr>";
$startDay = date("w", $d1);

echo "<tr>";

for($i=0; $i<$startDay; $i++)
    echo "<td>&nbsp;</td>";
    
do
{
 echo "<td>".date("d",$d1)."</td>";   
 if(date("w", $d1) == 6) echo "</tr>"."<tr>";
 $d1=strtotime("+1 day", $d1);
}
while(date("d",$d1) > 1);



echo "<tr/>";


?>

</body>
</html>
