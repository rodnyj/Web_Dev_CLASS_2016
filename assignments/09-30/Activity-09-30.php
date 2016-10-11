<html>
<head>
<title>
How to use Cookies
</title>
</head>
<body style="<?php echo 'background-color:'.$_COOKIE['favColor']; ?>">
<?php
setcookie("favColor", "dsgf", time() - (60*60*24 * 1), "/"); //set a time that is past to destroy a cookie
setcookie("myName", "kuklgh", time() - (60*60*24 * 1), "/"); 
?>
Cookies are destroyed!!!
</body>
</html>