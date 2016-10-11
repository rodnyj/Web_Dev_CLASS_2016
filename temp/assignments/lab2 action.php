<html>
<head>
<title> </title>
</head>

<body>
<?php
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$member = trim($_POST['member']);
$status = $_POST['status'];

if($name == null){
	echo "name is required";
}
else{

if($email == null){
	echo "email is required";
}
else{
if($member == null){
	echo "100";
}
else{
echo "Thank you for your registration. Here is your information we collected:" . "<br>";
echo "Name: " . $name. "<br>";
echo "Email: " . $email. "<br>";


if($status =="vip"){
	if($member > 3){
    
    $newCost = 200 - (200 * .30);
    printf( "Your anual membership fee is: %.2f", $newCost);
    }
    else{
    $newCost = 200;
    printf("Your anual membership fee is: %.2f", $newCost);
    }
}

if($status == "regular"){
	if($member > 3){
    
    $newCost = 100 - (100 * .30);
    printf( "Your anual membership fee is: %.2f", $newCost);
    }
    else{
    $newCost = 100;
    printf("Your anual membership fee is: %.2f", $newCost);
    }
}
}
}
}
?>


<?php



?>
</body>

<html>