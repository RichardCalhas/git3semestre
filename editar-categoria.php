<!DOCTYPE html>
<?php
$result_categoria = "SELECT * FROM categoria WHERE id_categoria=" . $_GET['id_categoria'];
$resultado_categoria = mysqli_query($conn, $result_categoria);
$row_categoria = mysqli_fetch_assoc($resultado_categoria);
?>
<div id="corpo-index-produto">
    <div class="card-body">
        <div class="form-group">
            <form action="?page=controle" method="POST">
                <h1>Editar categoria</h1>
                <label>Tipo de categoria:</label>
                <input type="text" name="tipo_categoria" maxlength="15" value="<?php echo $row_categoria['tipo_categoria']; ?>" class="form-control">
        </div>
        <div class="form-group">
            <input type="hidden" name="controle" value="editar-categoria">
            <input type="hidden" name="id_categoria" value="<?php print $_REQUEST['id_categoria']; ?>">
            <button type="submit" class="btn btn-success">
                Editar
            </button>
        </div>
        </form>