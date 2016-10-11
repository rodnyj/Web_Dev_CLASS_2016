<?php
session_start();
?>

<html>
<head>
<title>
Action-10-05-2
</title>
</head>
<body>

<?php
if(isset($_SESSION["userid"]))
{
echo "Welcome member, you are logged in<br/>";
}
else
{
echo "Member only! You have to log in first<br/>";
echo "Click <a href=Lab5.php>here</a> to go back to the login page<br/>";
exit();
}

?>
<form method="post" enctype="multipart/form-data" action="Lab5-Action-3.php">
Please upload your picture:
<input type="file" name="myfile"><br/>
Please type your annual salary:
<input type="text" name="salary"><br/>
Please type your annual bonus:
<input type="text" name="bonus"> <br/> 
<input type="submit" value="upload" name="submit">
</form>

</body>
</html>