<?php
session_start();
?>
<html>
<head>
<title>
How to use Sessions
</title>
</head>
<body style="<?php echo 'background-color:'.$_SESSION['color']; ?>">

<?php
if(isset($_SESSION['viewed']))
{
unset($_SESSION['color']);
unset($_SESSION['viewed']);
//$_SESSION = array();
session_destroy();
echo "You logged off successfully.<br/>";
}
else
echo "No authorization for accessing this page. Please log in first!<br/>";
?>

</body>
</html>