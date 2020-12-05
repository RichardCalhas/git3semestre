<!DOCTYPE html>
<?php
$result_usuario = "SELECT * FROM usuario WHERE id_usuario=" . $_SESSION["id"];
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>
<div id="corpo-index-produto">
    <div class="card-body">
        <div class="form-group">
            <form action="?page=controle" method="POST">
                <h1>Alterar senha</h1>
                <label>Senha antiga:</label>
                <input type="password" name="senha_antiga" class="form-control">
                <label>Nova senha:</label>
                <input type="text" name="nova_senha" class="form-control">
                <label>Repetir senha:</label>
                <input type="text" name="repetir_senha" class="form-control">
        </div>
        <div class="form-group">
            <input type="hidden" name="controle" value="editar-senha">
            <input type="hidden" name="id_usuario" value="<?php print $_SESSION["id"]; ?>">
            <button type="submit" class="btn btn-success">
                Editar
            </button>
        </div>
        </form>