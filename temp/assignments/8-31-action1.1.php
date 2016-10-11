<html>
<head>
<title> This is a title </title>
</head>
<body>
<form action="8-29-action2.php" method="post">
<!-- make note of the action php 8-29-action2.php for this one, which is correct -->
Firstname: <input type="type" name="first"><br>

Lastname: <input type="text" name="last"><br>

Email: <input type="text" name="email"><br>

URL: <input type="text" name="url"><br>
<input type="submit" value="sign up">
</form>

<?php
$filename="counter-08-31.txt";
$nvisit= file_get_contents($filename);
if($nvisit ==NULL){
	$nvisit=0;
}
    $nvisit++;
	file_put_contents($filename, $nvisit, LOCK_EX);

printf("You are the No. %d visitor",$nvisit);

$filename="IP-lIST-08-31.txt";
$ip = $_SERVER['REMOTE_ADDR']."\n";
file_put_contents($filename, $ip, FILE_APPEND | LOCK_EX);

$iplist = $nvisit= file_get_contents($filename);
echo "<pre>";
echo $iplist;
echo "</pre>";
?>
</body>
</html>