<!DOCTYPE html>
<div id="corpo-index-produto">
    <div class="card-body">
        <div class="form-group">
            <form action="?page=controle" method="POST">
                <h1 style="text-align: center;">Gerenciar usuarios</h1>
                <label>Nome:</label>
                <input type="text" name="nome_usuario" placeholder="Nome" class="form-control">
                <label>E-mail:</label>
                <input type="email" name="email_usuario" placeholder="Email" class="form-control">
                <label>Usuário:</label>
                <input type="text" name="usuario" placeholder="Usuario" class="form-control">
                <label>Senha:</label>
                <input type="text" name="senha_usuario" placeholder="Senha" class="form-control">
                <label>Tipo de usuário:</label>
                <select name="tipo_usuario" class="form-control">
                    <option>- Escolha -</option>
                    <option value="1">Administrador</option>
                    <option value="2">Funcionário</option>
                </select>
        </div>
        <div class="form-group">
            <input type="hidden" name="controle" value="cadastrar-usuario">
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
            $sql = "SELECT * FROM usuario";

            $res = $conn->query($sql) or die($conn->error);

            $qtd = $res->num_rows;

            if ($qtd > 0) {
                print "<p>Encontrou <b>$qtd</b> resultados</p>";
                print "<table class='table table-bordered table-dark'>";
                print "<tr>";
                print "<th>Id</th>";
                print "<th>Nome</th>";
                print "<th>Email</th>";
                print "<th>Usuário</th>";
                print "<th>Tipo</th>";
                print "<th>Ações</th>";
                print "</tr>";
                while ($row = $res->fetch_object()) {
                    print "<tr>";
                    print "<td>" . $row->id_usuario . "</td>";
                    print "<td>" . $row->nome_usuario . "</td>";
                    print "<td>" . $row->email_usuario . "</td>";
                    print "<td>" . $row->usuario . "</td>";
                    print "<td>" . $row->tipo_usuario . "</td>";
                    print "<td>
<button class='btn btn-outline-success' onclick=\"location.href='?page=editar-usuario&id_usuario=" . $row->id_usuario . "';\">Editar</button>
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