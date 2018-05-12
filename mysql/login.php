<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
	
	<div class="container">
		<div class="col-xs-6">
			<form action="login.php" method="post">
				<div class="form-group">
				<lebel for="username" name="username">User Name</lebel>
				<input type="text" class="form-control">
				</div>
				<div class="form-group">
				<lebel for="password" name="password">Password</lebel>
				<input type="password" class="form-control">
				</div>
				<input class="btn-primary" type="submit" name="submit" value="submit">
			</form>
		</div>
		
	</div>

	
</body>
</html>