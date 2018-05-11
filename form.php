<?php  

if(isset($_POST['submit'])){
	echo "Info submited";
	$username = $_POST['username'];
	
	$password = $_POST['password'];
	
	echo "Hello User" . $username; 
	echo " Your Password is: " . $password;
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