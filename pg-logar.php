<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/estilo.css">
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <title>Pagina de login</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Vendas</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Inicio</a>
                </li>
            </ul>
        </div>
    </nav>
    <div id="corpo-index">
        <div class="card-body">
            <form action="login.php" method="POST">
                <label for="exampleInputEmail1"  style="color:white;">Usuário</label>
                <input type="text" name="usuario" placeholder="Digite seu usuário" class="form-control">
                <label for="exampleInputPassword1" style="color:white;">Senha</label>
                <input type="password" name="senha_usuario" placeholder="Digite sua Senha" class="form-control">
                <a href="recuperar-senha.php" style="color: white">Esqueceu a senha?</a>
                <button type="submit" class="btn btn-info btn-lg btn-block">Acessar</button>
            </form>
        </div>
    </div>
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>