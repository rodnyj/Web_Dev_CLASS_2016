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
	unset($_SESSION['color']);
	unset($_SESSION['iphone']);
	//to unset everything all together
	//$_SESSION[] = array(); 
	session_destroy();
	echo "You are logged off<br/>";
}
else
{
	echo "No authorization. Log in first<br/>";
}
?>
</body>
</html>