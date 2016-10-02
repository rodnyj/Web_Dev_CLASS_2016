<!-- -->
<html>
<head>
</head>
<body>

<body style="<?php echo'background-color:' . $_COOKIE[$cookie_name];?>">

<?php

setcookie("favColor", "asdf", time() - (60*60*24 *1),"/");
echo"<br/>";
setcookie("myName", "qqwer", time() - (60*60*24 *1),"/");

?>

</body>
<form>
</form>
</body>
</html>