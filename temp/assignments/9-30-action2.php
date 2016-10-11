<?php
//Note: This setcookie() must appear before the <html> tag
$cookie_name = "favColor";
$cookie_value = $_POST["mycolor"];
if(isset($_POST["mycolor"]))
setCookie($cookie_name, $cookie_value, time() + 60*60*24,"/");
setCookie("myname", $_POST["myname"], time() + 60*60*24,"/");
?>

<html>
<head>
</head>
<body style="<?php echo'background-color:' . $_COOKIE['favColor'];?>">
<?php
echo "Welcome:" > $_COOKIE['myname']. "<br/>";
echo "Click <a href=9-30-action3.php>here</a> to go back to setcolort<br/>";
echo "Click <a href=9-30-action4.php>here</a> to go back to welcome page<br/>";


?>
</body>
</html>