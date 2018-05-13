<?php 

if(isset($_POST['submit'])){
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	
	$connection = mysqli_connect('localhost', 'root', '', 'loginapp');
	
	if($connection){
		echo "<center>We are connected</center>";
	}else{
		die("Coneection faild");
	}
	
	$query = "INSERT INTO users(username,password)";
	$query .= "VALUES ('$username', '$password')";
	
	$result = mysqli_query($connection, $query);
	
	if(!$result){
		die('Query Failed' . mysqli_error());
	}
	
	

	
	
}


?>






<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User Login</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
	
	<div class="container">
		<div class="col-sm-6">
			<form action="login_create.php" method="post">
				<div class="form-group">
				<lebel for="username">User Name</lebel>
				<input type="text" name="username" class="form-control">
				</div>
				<div class="form-group">
				<lebel for="password">Password</lebel>
				<input type="password" name ="password" class="form-control">
				</div>
				<input class="btn-primary" type="submit" name="submit" value="submit">
			</form>
		</div>
		
	</div>

	
</body>
</html>