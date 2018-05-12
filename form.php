<?php  

if(isset($_POST['submit'])){
	$name = array("Edwin", "Shafiq", "Peter", "Habibi");
	$minimum = 5;
	$maximum = 10;
	echo "Info submited";
	$username = $_POST['username'];
	
	$password = $_POST['password'];
	echo "<br>";
	
	echo "Hello User : " . $username; 
	echo "<br>";
	echo " Your Password is : " . $password;
	echo "<br>";
	if(strlen($username) < $minimum){
		echo "User Name has to be longer than 5 Chartr";
	}
	
	echo "<br>";
	
	if(strlen($password) < $maximum){
		echo "Password can not be longer than 10 charecter";
	}
	
	if(!in_array($username, $name)){
		echo " Sorry You are not allowed..!!";
	}else{
		echo " Welcome..!!";
	}
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<form action="form.php" method="post">
	
<input type="text" placeholder="Enter Username" name="username">	
<input type="password" placeholder="Enter Password" name="password">	
<br>
	
	<input type="submit" name="submit">
	
</form>
	
</body>
</html>