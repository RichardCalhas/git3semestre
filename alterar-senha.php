<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Redefinir a senha</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./css/estilo.css">
	<link href="fontawesome/css/all.css" rel="stylesheet">
</head>

<body>
	<div id="corpo-index">
		<div class="card-body">
			<h1>Redefinir a senha</h1>
			<form action="alterar.php" method="POST">
				<div class="form-group">
					<label>E-mail</label>
					<input type="text" name="email_usuario" class="form-control">
					<label>Usuario</label>
					<input type="text" name="usuario" class="form-control">
					<label>Senha</label>
					<input type="text" name="senha_usuario" class="form-control">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-info btn-lg btn-block">Redefinir</button>
				</div>
			</form>
		</div>
	</div>
	<script src="js/jquery-3.5.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>