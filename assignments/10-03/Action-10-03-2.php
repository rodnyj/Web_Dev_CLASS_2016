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
echo "Click <a href=https://www.google.com/?gws_rd=ssl#q=iphone&tbm=shop>
here</a> to buy something you recently viewed: ". $_SESSION['viewed']."<br/>";

echo "<hr/>";
echo "Click <a href=Action-10-03-3.php>here</a> to log off<br/>";
}
else
echo "No authorization for accessing this page. Please log in first!<br/>";
?>

</body>
</html>