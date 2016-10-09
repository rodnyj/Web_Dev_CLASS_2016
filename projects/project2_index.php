<!-- project2_index.php 
   example: http://drlai.altervista.org/ITEC4450/Project2.php
-->

<!DOCTYPE html>
<html>
<head>
	<title>
		Project 2
	</title>

	<style>
		table, th, td {
			border: 1px solid black;
		}
	</style>
</head>
<!--------------------- PHP ------------------------------>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL"; 
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>  

<!-------------------------ends here ---------------------->


<body>
	<h1>Welcome to PHP Survey!!!</h1>
	<p>Please answer the following questions:</p>
	<hr/>
	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		First Name: <input type="text" name="name" value =""> <font color=red>*
	</font><br><br>
	E-mail: <input type="text" name="email" value = ""> <font color=red>*
</font><br><br>
<hr/>
<p>Questons 1</p>
Your age please:<input type="text" name="age" value ="">
<br/>
<p>Questons 2</p>
How long on average do you use computers every day:<input type="text" name="Q2" value ="">
<br/>
<p>Questons 3</p>
<p>You are:</p>
<input type="radio" value="Male" name="gender" >A. Male<br/>
<input type="radio" value="Female" name="gender" >B. Female<br/>
<input type="radio" value="Other" name="gender" >C. Do not want to tell<br/>
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

//initialize variables
$name = $email = $age = $Q2 = $gender = $Q4 = $Q5 = " ";


// grab user inputs
$name = security("name");
$email = security("email");
$age = security("age");
$Q2 = security("Q2");
$gender = security("gender");
$Q4 = security("Q4");
$Q5 = security("Q5");

//adds htmlspecialchars security to your site and trim inputs
function security($security){
	$security_check = htmlspecialchars(trim($_POST[$security]));
	return $security_check;
}

//checks that name and email is not null 
if($name == NULL){
	echo "name is required!";
} 
elseif($email == NULL){
	echo "email is required!";
}
//if name and email is not null
else{ 
  //grabs survey.txt contents
	$filename = "survey.txt";
	$file = file_get_contents($filename);

  //checks if user's name is already in the file and if so, add him as present
	$present = false;
  // grabs data from $file row by row
	$data_row = explode("\n", $file); 
	if($file != NULL){

		for($i = 0; $i < count($data_row); $i++){
      //grabs data from $data_row tab by tab, content by content
			$data = explode("\t", $data_row[$i]);
      //checks if user's name is in $data 
			if($name == $data[$i]){  
				$present = true;
				break;
			}
		}
	}
	if($file != NULL && $present == true){
		"You already took this test. See your results below";
	}
	else{

  //grabs id where we left off from id.txt which will make each id unique
		$id = file_get_contents("id.txt");
  //if file is enpty, add content (zero) to file
		if($id == NULL)
			$id = 0;
		$id++;
  //creates a string to add to our filename survey.txt
		$file_contents = $id . "\t" . $name . "\t" . $email . "\t" . $age . "\t" . $Q2 . "\t" . $gender . "\t" . $Q4 . "\t" . $Q5 . "\n";
  //puts contents to filename survey.txt
		file_put_contents($filename, $file_contents, FILE_APPEND | LOCK_EX);
  //puts id back to id.txt overriding previous id
		file_put_contents("id.txt", $id, LOCK_EX);


    //function to create table head and first row
		function table_head($heading){  
      //creates a table
			echo "<table>";
      //creates heading and 2 table data in first row
			echo "<th colspan='2'>" . $heading . "</th>";
      //creates row Category & Percentage
			echo "<tr>";
      echo "<td>Category</td>
      <td>Percentage</td>";
      echo "</tr>";
  }

	//initialize variable for gender 
  $total = 0;
  $male = 0;
  $female = 0;
  $other = 0;
	
  //grabs gender percentages
  for($i = 0; $i < count($data_row); $i++){
 
	//grabs data from data_row tab by tab, content by content
  	$data = explode("\t", $data_row[$i]);

	//checks if gender is male or female and then increment accordingly
  	if($data[5] == "Male")  
  		$male++;
  	elseif($data[5] == "Female")
  		$female++;
  	else
  		$other++;
	    //increments total
  	$total++;

 }

  //create percentages
  $male_percent = $male/$total*100;
  $female_percent = $female/$total*100;
  $other = $other/$total*100;

	//array to store gender percentages
  $gender_percentage = array($male, $female, $other);


  		//consists of our table head
  table_head($heading);

  		//creates array to store genders
  $gender = array("Male","Female","Did not tell");

  		//loop to create gender table
  for($i = 0; $i<count($gender); $i++){

  	echo "<tr>";

  	echo "<td>" . $gender[$i] .  "</td>";

  	echo "<td> <progress value=$gender_percentage[$i] max='100'> </progress>";
  	printf("%.2f%%", $gender_percentage[$i]);  		
  	"</td>";

  	echo "</tr>"; 
  } 
  echo "</table>"; 
  echo "<br/><hr/>";
}
echo "<br/>";

table_head($heading);
$percentage_data = 10;
$agreement = array("Strongly Disagree","Disagree","Neutral", "agree", "Strongly Agree");

for($i = 0; $i<count($agreement); $i++){
	echo "<tr>";
	echo "<td>" . $agreement[$i] .  "</td>";
	echo "<td>" . $percentage_data .  "</td>";
	echo "</tr>"; 
}
echo "</table>"; 
echo "<br/><hr/>";

}

?>
</body>
</html> 