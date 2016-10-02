<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="generator" content="AlterVista - Editor HTML"/>
  <title> GGC PHP Club</title>
</head>
<body>

	<h1> Welcome to become a member of the GGC PHP Club!!! </h1>
    <p> Please provide the following information for registration: </p> <hr>
    <form action="8-24-action-GGC_PHP_Club2.php" method="POST">
    	Name: <input type="text" name="name"><br>
        E-mail <input type="text" name="email"><hr>
        How many years you have been a member of the GGC PHP Club: <input type="text" name="member">
        <p>(If you have been a member for more than 3 years, your annual membership fee is 30% off)</p><hr>
        <p>What type of membership you would like to be:</p> <br>
        VIP <input type="radio" name="status" value="vip">
        Regular <input type="radio" name="status" value="regular">
        <p>(If you choose VIP, your annual membership fee is $200.00, otherwise it is $100)</p><hr>
        <input type="submit" value="register"> <p>&nbsp;</p>
        <input type="reset" value="reset">
    </form>
    
</body>
</html>
