<?php
session_start();
?>

<html>
<head>
<title>
Action-10-05-4
</title>
</head>
<body>

<?php
if($_SESSION["userid"] == "drlai")
{
echo "<img src=".$_SESSION['picture']." width=300 height=300><br/>";

echo "Your annual salary is: ".$_SESSION["salary"]."<br/>";
echo "Your annual bonus is: ".$_SESSION["bonus"]."<br/>";
echo "Your annual income after tax is: ".(($_SESSION["bonus"]+$_SESSION["salary"])*0.7)."<br/>"; 

echo "Click <a href=Lab5-Action-5.php>here</a> to logoff and go back to your login page<br/>";
}
else
{
echo "Member only! You have to log in first<br/>";
echo "Click <a href=Lab5.php>here</a> to go back to the login page<br/>";
exit();
} 
?>

</body>
</html>