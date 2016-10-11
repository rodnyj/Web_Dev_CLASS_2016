<html>
<head>
<style>
.important {color: red;}
</style>
</head>
<body> 
<h2>PHP Form Validation Example</h2>
<p><span class="important">* required field.</span></p>
<form method="post" action='<?php echo $_SERVER["PHP_SELF"]; ?>'>
Name: <input type="text" name="name" value="
<?php  
echo $_POST['name'];
?>">

<span class="important"> * <?php 

if(empty($_POST["name"]) && $_POST["name"] ==NULL) echo "Name is required"; 
?><br/> </span>

E-mail: <input type="text" name="email" class="error" value="<?php  
echo $_POST['email'];

?>"><span class="important"> * <?php 

if(empty($_POST["email"]) && $_POST["email"] ==NULL) echo "email is required"; 
?><br/><br> </span>
Website: <input type="text" name="website" value="
<?php  
echo $_POST['website'];
?>"><br/><br>

Comment: <textarea name="comment" rows="5" cols="40" value="<?php  
echo $_POST['comment'];

?>">
</textarea>
<br><br>
Gender:
<input type="radio" name="gender" value="female" 

<?php
if($_POST['gender']== "female") echo "checked";
?>

>Female
<input type="radio" name="gender" value="male" class="important"
<?php
if($_POST['gender']== "male") echo "checked";
?>

>Male*<br/>
<input type="submit" name="submit" value="Submit">
</form>

<?php
if(!empty($_POST["name"]) && !empty($_POST["email"])){
echo "<h1> Your input</h1><br>";
echo "Name" . $_POST["name"]. "<br>";
echo "email" . $_POST["email"]. "<br>";
echo "comment" . $_POST["comment"]. "<br>";
echo "gender" .$_POST["gender"]. "<br>";
}
?>
</body>
</html>