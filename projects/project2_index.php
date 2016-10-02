<!-- project2_index.php 
	 example: http://drlai.altervista.org/ITEC4450/Project2.php
	-->


	<!DOCTYPE html>
	<html>
	<head>
		<title>
			Project 2
		</title>
	</head>
	<body>
		<h1>Welcome to PHP Survey!!!</h1>
		<p>Please answer the following questions:</p>
		<hr/>
		<form action="<?php echo '$_SERVER["PHP_SELF"];'; ?>" method="post">
			Name: <input type="text" name="name" value =""> <font color=red>*
		</font><br><br>
		E-mail: <input type="text" name="email" value = ""> <font color=red>*
	</font><br><br>
	<hr/>
	<p>Questons 1</p>
	Your age please:<input type="text" name="age" value ="">
	<br/>
	<p>Questons 2</p>
	How long on average do you use computers every day:<input type="text" name="hours" value ="">
	<br/>
	<p>Questons 3</p>
	<p>You are:</p>
	<input type="radio" value="A" name="Q3" >A. Male<br/>
	<input type="radio" value="B" name="Q3" >B. Female<br/>
	<input type="radio" value="C" name="Q3" >C. Do not want to tell<br/>
	<br/>
	<p>Questons 4</p>
	<p>PHP programming is challenging</p>
	<input type="radio" value="A" name="Q4" >A. Strongly Disagree<br/>
	<input type="radio" value="B" name="Q4" >B. Disagree<br/>
	<input type="radio" value="C" name="Q4" >C. Neutral<br/>
	<input type="radio" value="D" name="Q4" >D. Agree<br/>
	<input type="radio" value="E" name="Q4" >E. Strongly Agree<br/>
	<br/>
	<p>Questons 5</p>
	<p>PHP programming is fun</p>
	<input type="radio" value="A" name="Q5" >A. Strongly Disagree<br/>
	<input type="radio" value="B" name="Q5" >B. Disagree<br/>
	<input type="radio" value="C" name="Q5" >C. Neutral<br/>
	<input type="radio" value="D" name="Q5" >D. Agree<br/>
	<input type="radio" value="E" name="Q5" >E. Strongly Agree<br/>
	<br/>
	<input type="submit" value="Submit this Survey and see result"><input type="reset">
</form>

<?php

echo "<br/>";
echo "<hr/>";

$name = $_POST['name'];
$email = $_POST['email'];
$Q3 = $_POST[''];
$Q4 = $_POST[''];
$Q5 = $_POST[''];




?>

</body>
</html> 