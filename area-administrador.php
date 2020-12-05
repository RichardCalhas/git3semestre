<?php
session_start();
if (!isset($_SESSION["id"]) || $_SESSION["tipo"] == "2") {
    header("location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/estilo.css">
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <title>Area privada</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="area-administrador.php"><i class="fas fa-bullhorn"></i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="area-administrador.php">Inicio</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="?page=gerenciar-usuarios" style="color: white;">Gerenciar usuários</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="?page=gerenciar-produtos" style="color: white;">Gerenciar produtos</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="?page=gerenciar-categorias" style="color: white;">Gerenciar categorias</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
                        Perfil
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="?page=editar-perfil">Editar perfil</a>
                        <a class="dropdown-item" href="?page=editar-senha">Alterar senha</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
                        Serviços
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="?page=Listar-Servicos">Listar Solicitações</a>
                        <a class="dropdown-item" href="?page=Listar-Servicos-Permitidos">Listar Permitidos</a>
                        <a class="dropdown-item" href="?page=Listar-Servicos-Desativados">Listar Desativados</a>
                    </div>
                </li>
            </ul>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                <li class="nav-item">
                    <a class="btn btn-secondary" href=logout.php role="button">Sair</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="logado">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 style="color: white;">Admin, seja bem-vindo!</h1>
                    <div id="tabela-perfil">
                        <table class="table table-bordered table-dark">
                            <th colspan="2">
                                <button onclick=<?php print "\"if(confirm('Editar foto?')){location.href='?page=editar-perfil';}else{false;}\"" ?> type="button" class="btn btn-outline-light">
                                    <div id="foto-perfil">
                                        <?php print '<figure style="margin:2px;">
                        <img src="img/' . $_SESSION["foto"] . '" class="align-self-start mr-3 rounded-circle" alt="..." width="150px" height="150px"></figure>'; ?>
                                    </div>
                                </button>
                            </th>
                            <tr>
                                <th scope="row">Nome</th>
                                <td><?php echo $_SESSION["nome"]; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">E-mail</th>
                                <td><?php echo $_SESSION["email"]; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Usuário</th>
                                <td><?php echo $_SESSION["usuario"]; ?></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <?php
                    include("config.php");

                    switch (@$_REQUEST["page"]) {
                        case "area-administrador":
                            include("area-administrador.php");
                            break;
                        case "editar-perfil":
                            include("editar-perfil.php");
                            break;
                        case "editar-senha":
                            include("editar-senha.php");
                            break;
                        case "gerenciar-usuarios":
                            include("gerenciar-usuarios.php");
                            break;
                        case "editar-usuario":
                            include("editar-usuario.php");
                            break;
                        case "gerenciar-produtos":
                            include("gerenciar-produtos.php");
                            break;
                        case "editar-produto":
                            include("editar-produto.php");
                            break;
                        case "gerenciar-categorias":
                            include("gerenciar-categorias.php");
                            break;
                        case "editar-categoria":
                            include("editar-categoria.php");
                            break;
                        case 'controle':
                            include("controle.php");
                            break;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>