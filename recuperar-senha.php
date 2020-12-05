<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Recuperar senha</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/estilo.css">
    <link href="fontawesome/css/all.css" rel="stylesheet">
</head>

<body>
	<div id="corpo-index">
		<div class="card-body">
			<h1>Informe usuário e email</h1>
			<form action="enviar.php" method="POST">
				<label>Usuário</label>
				<input type="text" name="usuario" placeholder="Digite o usuário cadastrado" class="form-control" required>
				<label>E-mail</label>
				<input type="email" name="email_usuario" placeholder="Digite o E-mail cadastrado" class="form-control" required>
				<button type="submit" class="btn btn-info btn-lg btn-block">Enviar</button>
			</form>
		</div>
	</div>
	<p>
		<button type="button" onclick="location.href='login.php'" class="btn btn-primary">Voltar</button>
	</p>
	<script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>