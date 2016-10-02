<!DOCTYPE html>
<html>
<head>
<title>
Activity-08-22
</title>
</head>
<body>

<?php

$instar=10;

for($i=0;$i<$instar;$i++){
	for($j=0; $j<$instar-$i;$j++){
		echo "&nbsp;";
		
	}
	
	for($k=0; $k<$i+1;$k++){
		echo"*";
	}
	echo"<br/>";
}

for($i=$instar-1;$i>=0;$i--){
	for($j=0; $j<$instar-$i;$j++){
		echo "&nbsp;";
		
	}
	
	for($k=0; $k<$i+1;$k++){
		echo"*";
	}
	echo"<br/>";
}
$num=123.456;
printf("Displayed in integer: %d<br/>", $num);
printf("Displayed in integer: %f<br/>", $num);
printf("Displayed in integer: %.2f<br/>", $num);
printf("Displayed in integer: %5.2f<br/>", $num);
printf("Displayed: %d, %f, %.2f<br/>", $num, $num-1,$num-2);

$strl="hello";
$str2="hello world!!!";
printf("[%s]<br/>", $strl);


?>

</body>
</html>
