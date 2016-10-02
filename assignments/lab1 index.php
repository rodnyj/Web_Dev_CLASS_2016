<!DOCTYPE html>
<html>
<head>

<style>
div {
    background-color:blue;
}
</style>

<title>
Activity-08-22
</title>
</head>
<body>

<div>
<?php

$default_space = 150;
$instar=5;

for($i=0;$i<$instar;$i++){
//$default_space = 100;
//$instar=10;

	for($j=0; $j<$default_space-$i;$j++){
		echo "&nbsp;";	
	}	
	for($k=0; $k<$i+1;$k++){
		echo"*";
	}
	echo"<br/>";
}

$default_space = 150;
$instar2=10;
for($i=0;$i<$instar2;$i++){

	for($j=0; $j<$default_space-$i;$j++){
		echo "&nbsp;";
		
	}
	
	for($k=0; $k<$i+1;$k++){
		echo"*";
	}
	echo"<br/>";
}

$default_space = 150;
$instar3=15;
for($i=0;$i<$instar3;$i++){

	for($j=0; $j<$default_space-$i;$j++){
		echo "&nbsp;";
		
	}
	
	for($k=0; $k<$i+1;$k++){
		echo"*";
	}
	echo"<br/>";
}
//---------------------------------------------------------------
$default_space = 145;
$instar3=5;
for($i=0;$i<$instar3;$i++){

	for($j=0; $j<$default_space;$j++){
		echo "&nbsp;";		
	}
	
	for($k=0; $k<7;$k++){
		echo"*";
	}
	echo"<br/>";
}


?>
</div>
<hr/>

<?php
$a=94.3817;
printf("Let a=94.3817. Displaying a using integer is: %d", $a); echo "<br/>";
printf("Let a=94.3817. Displaying a using float is: %f", $a); echo "<br/>";
printf("Let a=94.3817. Displaying a using float of 2 decimals is: %.2f", $a); echo "<br/>";
printf("Let a=94.3817. Displaying a using string is: %s", $a); echo "<br/>";
?>
</body>
</html>
