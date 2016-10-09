<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body style="<?php echo 'background-color:' . $_SESSION['color'];?>">
<?php

if(isset($_SESSION['iphone']))
{	

	echo "<a href=http://www.apple.com/iphone-7/ > click here </a> to buy something" . $_SESSION['iphone'] . "<br/>";
	echo "<hr/>";
    echo "<a href=10-3-action5.php>Login to your school</a><br/>". $_SESSION['school'] . "<br/>";
    echo "<hr/>";
	echo "<a href=10-3-action4.php>Log off</a><br/>";
}
else
{
echo "No authorization. Log in first<br/>";
}

?>
</body>
</html>