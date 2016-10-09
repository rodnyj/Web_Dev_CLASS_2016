<html>
<head>
</head>

<body>
<?php
$cars = array("BMW", "Toyota", "Volvo");
echo "My car will be ". $cars[0]. "will be nice!!!!!!" ;

$fri[0] = "Mike ";
$fri[1] = "Smith ";
$fri[2] = "Troy ";
$fri[8] = "Ted";

$len = count($fri);

echo "My friends are";
for($i=0;$i<$len;$i++)
echo $fri[$i]. ",";
echo "<br/>";

foreach($fri as $value)
echo $value. ",";
echo "<br/>";

//PHP Associative arrays

$age = array("Peter"=>"54", "Bill"=>"54", "Drew"=>"54");
echo "Petter's age is " . $age["Bill"]; // Didn't echo out

foreach($age as $newAKey => $newAge)
echo "This key: " . $newAKey . "is for this ID: " . $newAge;
echo"<br/>";

///////////////////////////////////////////////
$ID["Mike"] = "123";
$ID["Nick"] = "456";
$ID["Jone"] = "789";

foreach($ID as $keys => $newID)
	echo "This" . $keys . "is for this " . $newID;
?>

</body>

</html>