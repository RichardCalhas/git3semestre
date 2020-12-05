<!DOCTYPE html>
<div id="corpo-index-produto">
    <div class="card-body">
        <div class="form-group">
            <form action="?page=controle" method="POST">
                <h1 style="text-align: center;">Gerenciar categorias</h1>
                <label>Categoria</label>
                <input type="text" name="tipo_categoria" maxlength="45" placeholder="Categoria" class="form-control">
        </div>
        <div class="form-group">
            <input type="hidden" name="controle" value="cadastrar-categoria">
            <button type="submit" class="btn btn-primary">
                Inserir novo
            </button>
        </div>

        </form>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-success my-2 my-sm-0" type="submit">Encontrar</button>
        </form>
        <div id="tabela">
            <?php
            $sql = "SELECT * FROM categoria";

            $res = $conn->query($sql) or die($conn->error);

            $qtd = $res->num_rows;

            if ($qtd > 0) {
                print "<p>Encontrou <b>$qtd</b> resultados</p>";
                print "<table class='table table-bordered table-dark'>";
                print "<tr>";
                print "<th>Tipo de categoria</th>";
                print "<th>Ações</th>";
                print "</tr>";
                $count = 1;
                while ($row = $res->fetch_object()) {
                    print "<tr>";
                    print "<td >" . $row->tipo_categoria . "</td>";
                    print "<td>
<button class='btn btn-outline-success' onclick=\"location.href='?page=editar-categoria&id_categoria=" . $row->id_categoria . "';\">Editar</button>
</td>";
                    print "</tr>";
                }
                print "</table>";
            } else {
                print "Nenhum dado encontrado";
            }
            ?>
        </div>
    </div>
</div>