<html>
<head>
<title> This is a title </title>
</head>
<body>
<?php
if(trim($_POST["email"])==null)
echo "Email is required";
elseif(trim($_POST["first"])==null || trim($_POST["last"])==null)
echo "Full Name is required";
else{
$fname=test_input("first");
$last=test_input("last");
$email=test_input("email");
$url=test_input("url");

if(!filter_var($email, FILTER_VALIDATE_EMAIL)) 
//|| !filter_var($url, FILTER_VALIDATE_URL))
echo "invalid email and/or url";
else
echo "First Name: ".$fname. "<br>Last Name: ".$last. "<br>Email: ".$email. "<br>URL: ".$url;
}
function test_input($info){
	$result = htmlspecialchars(trim($_POST[$info]));
	return $result;
}
?>
</body>
</html>