<!DOCTYPE html>
<html>
<head>
	<title>P�gina de inicio de sesi�n</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h2>P�gina de inicio de sesi�n</h2>
		<form action="login.php" method="POST">
			<div class="form-group">
				<label for="username">Nombre de usuario:</label>
				<input type="text" class="form-control" id="username" name="username" required>
			</div>
			<div class="form-group">
				<label for="password">Contrase�a:</label>
				<input type="password" class="form-control" id="password" name="password" required>
			</div>
			<button type="submit" class="btn btn-primary">Iniciar sesi�n</button>
		</form>
	</div>
</body>
</html>
