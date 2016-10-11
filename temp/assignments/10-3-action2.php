<?php
// Start the session
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>
		How to use Sessions
	</title>
</head>
<body>
<?php
	if($_POST['userid'] == "drlai" && $_POST['passwd'] == "ITEC4450"){

		$_SESSION['color'] = "cyan";
		$_SESSION['iphone'] = "iphone";
		$_SESSION['school'] = "school";
		echo "welcome!";
		echo "Click <a href=10-3-action3.php>HERE</a> to do some shopping</br>";

	}
	else{

		echo "login failed";
		echo "<a href=10-3-action_index.php>Go Back</a>";
	}

?>

</body>
</html>