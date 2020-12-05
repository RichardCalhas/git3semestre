<!DOCTYPE html>
<?php
$result_usuario = "SELECT * FROM usuario WHERE id_usuario=" . $_GET['id_usuario'];
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>
<div id="corpo-index-produto">
    <div class="card-body">
        <div class="form-group">
            <form action="?page=controle" method="POST">
                <h1>Editar usuário</h1>
                <label>Nome:</label>
                <input type="text" name="nome_usuario" value="<?php echo $row_usuario['nome_usuario']; ?>" class="form-control">
                <label>E-mail:</label>
                <input type="text" name="email_usuario" value="<?php echo $row_usuario['email_usuario']; ?>" class="form-control">
                <label>Usuário:</label>
                <input type="text" name="usuario" value="<?php echo $row_usuario['usuario']; ?>" class="form-control">
                <label>Tipo:</label>
                <select name="tipo_usuario" class="form-control">
                    <option>- Escolha -</option>
                    <option value="1">Administrador</option>
                    <option value="2">Funcionário</option>
                </select>
        </div>
        <div class="form-group">
            <input type="hidden" name="controle" value="editar-usuario">
            <input type="hidden" name="id_usuario" value="<?php print $_REQUEST['id_usuario']; ?>">
            <button type="submit" class="btn btn-success">
                Editar
            </button>
        </div>
        </form>