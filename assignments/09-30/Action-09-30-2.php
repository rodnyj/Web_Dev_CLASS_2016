<?php
//Note: The setcookie() must appear before the <html> tag
$cookie_name="favColor";
$cookie_value=$_POST["mycolor"];
if(isset($_POST["mycolor"]))
{
    setcookie($cookie_name,$cookie_value,time()+60*60*24,"/");
    setcookie("myName",$_POST["myname"],time()+60*60*24,"/");
}
?>

<html>
<body style="<?php echo 'background-color:'.$_COOKIE['favColor'];?>">
<?php
echo "Welcome: " . $_COOKIE["myName"]."<br/>";
echo "Click <a href=Activity-09-30.php>here</a> to go back to the setcolor page<br/>";
echo "Click <a href=Action-09-30-2.php>here</a> to go back to the setcolor page<br/>";
?>
</body>
</html>