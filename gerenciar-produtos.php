<!DOCTYPE html>
<div id="corpo-index-produto">
    <div class="card-body">
        <div class="form-group">
            <form action="?page=controle" method="POST">
                <h1 style="text-align: center;">Gerenciar produtos</h1>
                <label>Código:</label>
                <input type="text" name="codigo_produto" maxlength="15" placeholder="Codigo" class="form-control">
                <label>Nome:</label>
                <input type="text" name="nome_produto" maxlength="100" placeholder="Nome do produto" class="form-control">
                <div class="form-group">
					<label>Categoria:</label>
					<select name="id_categoria" class="form-control">
					<option>- Selecione uma Categoria -</option>
					<?php
					$sql = "SELECT * FROM categoria";			
					$res = $conn->query($sql) or die($conn->error);			
					$qtd = $res->num_rows;			
					if($qtd > 0){				
						while($row = $res->fetch_object()){
							print "<option value='".$row->id_categoria."'>".$row->tipo_categoria."</option>";
						}
					}else{
						print "Nenhum dado encontrado";
					}
					?>
					</select>
					</div>
                <label>Cor:</label>
                <input type="text" name="cor_produto" placeholder="Cor do produto" class="form-control">
                <label>Valor:</label>
                <input type="text" name="valor_produto" placeholder="Valor R$00,00" class="form-control">
        </div>
        <div class="form-group">
            <input type="hidden" name="controle" value="cadastrar-produto">
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
            $sql = "SELECT * FROM produto as p inner join categoria as c on p.id_Categoria=c.id_Categoria";

            $res = $conn->query($sql) or die($conn->error);

            $qtd = $res->num_rows;

            if ($qtd > 0) {
                print "<p>Encontrou <b>$qtd</b> resultados</p>";
                print "<table class='table table-bordered table-dark'>";
                print "<tr>";
                print "<th>Cod. Produto</th>";
                print "<th>No. Produto</th>";
                print "<th>Cat. Produto</th>";
                print "<th>Cor Produto</th>";
                print "<th>Vl. do Produto</th>";
                print "<th>Ações</th>";
                print "</tr>";
                $count = 1;
                while ($row = $res->fetch_object()) {
                    print "<tr>";
                    print "<td >" . $row->codigo_produto . "</td>";
                    print "<td>" . $row->nome_produto . "</td>";
                    print "<td>" . $row->tipo_categoria . "</td>";
                    print "<td>" . $row->cor_produto . "</td>";
                    print "<td>R$" . $row->valor_produto . ",00</td>";
                    print "<td>
<button class='btn btn-outline-success' onclick=\"location.href='?page=editar-produto&id_produto=" . $row->id_produto . "';\">Editar</button>
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