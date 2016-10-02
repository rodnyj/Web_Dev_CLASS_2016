<!DOCTYPE html>
<html>
<head>
<title>
Activity-08-22
</title>
</head>
<body>

<?php
print("Welcome ".$_POST["fname"]." ".$_POST["lname"]);
echo "<br/>";

printf("You pay: %.2f from your salary of: %.d",$_POST["salary"]*0.25,$_POST["salary"]);
?>


<!-- SECOND SCRIPT  -->
<?php
if($_POST["pwd"] == "joseph" && $_POST["user"] == "rodny")
echo "You are in <br/>";
else
echo "Try again <br/>";

if($_POST["vip"] == "MAN")
echo"Oh Yeah Mannnnn";
else
echo"Oh Yeahhh Womannnn";
?>

</body>
</html>
