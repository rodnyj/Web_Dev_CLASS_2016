<html>
<head>
<title> </title>
</head>

<body>
<?php
$name = trim($_POST['name']);
$member = trim($_POST['member']);
$status = trim($_POST['status']);
$register = trim($_POST['register']);
$reset = trim($_POST['reset']);


echo "Thank you for your registration. Here is your information we collected:";
echo "Name: " . $name;
echo "Email: " . $email;

if($member > 3 && $status == "vip"){
	echo"this";
}
elseif($member < 3 && $status == "vip"){
	echo"that";
}
else
{
echo"error;"
}
?>


<?php



?>
</body>

<html>