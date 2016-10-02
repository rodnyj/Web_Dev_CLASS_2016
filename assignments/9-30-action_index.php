<!-- How to use a cookies. What is a Cookie? Create Cookies With PHP -->

<!-- -->
<html>
<head>
</head>
<body style="<?php echo 'backgrounf-color:' . $_COOKIE['favColor'];?>">

<form method="post" action="9-30-action2.php">
	Please type your name:
	<input type="text" name="myname">
	<br/>
	Select your favorite color:
	<input type="color" name="myColor">

	<input type="submit" vlaue="Submit Query">
</form>
</body>
</html>