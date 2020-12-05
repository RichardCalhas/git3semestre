<!DOCTYPE html>
<?php
$result_produto = "SELECT * FROM produto WHERE id_produto=" . $_GET['id_produto'];
$resultado_produto = mysqli_query($conn, $result_produto);
$row_produto = mysqli_fetch_assoc($resultado_produto);
?>
<div id="corpo-index-produto">
    <div class="card-body">
        <div class="form-group">
            <form action="?page=controle" method="POST">
                <h1>Editar produto</h1>
                <label>Código:</label>
                <input type="text" name="codigo_produto" maxlength="15" value="<?php echo $row_produto['codigo_produto']; ?>" class="form-control">
                <label>Nome:</label>
                <input type="text" name="nome_produto" maxlength="100" value="<?php echo $row_produto['nome_produto']; ?>" class="form-control">
                <label>Categoria:</label>
                <input type="text" name="categoria_produto" value="<?php echo $row_produto['categoria_produto']; ?>" class="form-control">
                <label>Cor:</label>
                <input type="text" name="cor_produto" value="<?php echo $row_produto['cor_produto']; ?>" class="form-control">
                <label>Valor:</label>
                <input type="text" name="valor_produto" value="<?php echo $row_produto['valor_produto']; ?>" class="form-control">
        </div>
        <div class="form-group">
            <input type="hidden" name="controle" value="editar-produto">
            <input type="hidden" name="id_produto" value="<?php print $_REQUEST['id_produto']; ?>">
            <button type="submit" class="btn btn-success">
                Editar
            </button>
        </div>
        </form>