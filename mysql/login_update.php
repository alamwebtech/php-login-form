<?php include "db.php";?>
<?php include "functions.php";?>





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
				
				<div class="form-group">
				
					<select name="id" id="">
					
					<?php
						
					showAllData();
						
						?>

					</select>	
					
				</div>
				
				<input class="btn-primary" type="submit" name="submit" value="submit" value="UPDATE">
			</form>
			
			
			
		</div>
		
	</div>

	
</body>
</html>