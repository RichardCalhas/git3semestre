<!DOCTYPE html>
<?php
$result_usuario = "SELECT * FROM usuario WHERE id_usuario=" . $_SESSION["id"];
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>
<div id="corpo-index-produto">
    <div class="card-body">
        <div class="form-group">
            <h1>Editar perfil</h1>
            <form action="?page=controle" enctype="multipart/form-data" method="POST">
                <input type="hidden" name="controle" value="adicionar-foto">
                <label>Foto:</label>
                <input type="file" name="foto" accept="jpg|jpeg|png|bmp|gif|tiff">
                <input type="hidden" name="controle" value="editar-foto">
                <button class="btn btn-primary" type="submit"> Enviar</button>
            </form>
        </div>
        <div class="form-group">
            <form action="?page=controle" method="POST">
                <label>Nome:</label>
                <input type="text" name="nome_usuario" value="<?php echo $row_usuario['nome_usuario']; ?>" class="form-control">
                <label>E-mail:</label>
                <input type="text" name="email_usuario" value="<?php echo $row_usuario['email_usuario']; ?>" class="form-control">
                <label>Usuário:</label>
                <input type="text" name="usuario" value="<?php echo $row_usuario['usuario']; ?>" class="form-control">
        </div>
        <div class="form-group">
            <input type="hidden" name="controle" value="editar-perfil">
            <input type="hidden" name="id_usuario" value="<?php print $_SESSION["id"]; ?>">
            <button type="submit" class="btn btn-success">
                Redefinir
            </button>
        </div>
        </form>