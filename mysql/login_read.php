<?php 


	
	
	$connection = mysqli_connect('localhost', 'root', '', 'loginapp');
	
	if($connection){
		echo "<center>We are connected</center>";
	}else{
		die("Coneection faild");
	}
	
	$query = "SELECT * FROM users";
	
	
	$result = mysqli_query($connection, $query);
	
	if(!$result){
		die('Query Failed' . mysqli_error());
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
		<?php
			
			while($row = mysqli_fetch_assoc($result)){
				
				?>
				
				<pre>
				
				<?php
				print_r($row);
				?>
				
				</pre>
				
				<?php
			}
			?>
			
		</div>
		
	</div>

	
</body>
</html>