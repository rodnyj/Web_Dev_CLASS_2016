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
?>

</body>
</html>
