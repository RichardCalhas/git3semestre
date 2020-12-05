<?php
switch ($_REQUEST["controle"]) {
	case 'cadastrar-categoria':
		$categoria = $_POST["tipo_categoria"];
		$sql = "INSERT INTO categoria (tipo_categoria) VALUES ('{$categoria}')";
		$res = $conn->query($sql) or die($conn->error);


		if ($res == true) {
			print "<div class='alert alert-success'>Cadastrado com sucesso</div>";
		} else {
			print "<div class='alert alert-danger'>Não foi possível cadastrar, entre em contato pelo Whatsapp.</div>";
		}
		print "<a href='?page=gerenciar-categorias' class='btn btn-primary'>Gerenciar categorias</a>";
		break;
	case "editar-categoria":
		$categoria = $_POST["tipo_categoria"];
		$sql = "UPDATE categoria SET tipo_categoria='{$categoria}' WHERE id_categoria=" . $_REQUEST['id_categoria'];

		$res = $conn->query($sql) or die($conn->error);

		if ($res == true) {
			print "<div class='alert alert-success'>Editado com sucesso</div>";
		} else {
			print "<div class='alert alert-danger'>Não foi possível enviar editar, entre em contato pelo Whatsapp.</div>";
		}
		print "<a href='?page=gerenciar-categorias' class='btn btn-primary'>Gerenciar categorias</a>";
		break;

	case 'cadastrar-produto':
		$codigo = $_POST["codigo_produto"];
		$nome = $_POST["nome_produto"];
		$categoria = $_POST["id_categoria"];
		$cor = $_POST["cor_produto"];
		$valor = $_POST["valor_produto"];
		$sql = "INSERT INTO produto (codigo_produto,nome_produto,cor_produto,valor_produto,id_categoria) VALUES ('{$codigo}','{$nome}','{$cor}','{$valor}','{$categoria}')";
		$res = $conn->query($sql) or die($conn->error);


		if ($res == true) {
			print "<div class='alert alert-success'>Cadastrado com sucesso</div>";
		} else {
			print "<div class='alert alert-danger'>Não foi possível cadastrar, entre em contato pelo Whatsapp.</div>";
		}
		print "<a href='?page=gerenciar-produtos' class='btn btn-primary'>Gerenciar produtos</a>";
		break;

	case "editar-produto":
		$codigo = $_POST["codigo_produto"];
		$nome = $_POST["nome_produto"];
		$categoria = $_POST["categoria_produto"];
		$cor = $_POST["cor_produto"];
		$valor = $_POST["valor_produto"];
		$sql = "UPDATE produto SET codigo_produto='{$codigo}', nome_produto='{$nome}', categoria_produto='{$categoria}', cor_produto='{$cor}', valor_produto='{$valor}' WHERE id_produto=" . $_REQUEST['id_produto'];

		$res = $conn->query($sql) or die($conn->error);

		if ($res == true) {
			print "<div class='alert alert-success'>Editado com sucesso</div>";
		} else {
			print "<div class='alert alert-danger'>Não foi possível enviar editar, entre em contato pelo Whatsapp.</div>";
		}
		print "<a href='?page=gerenciar-produtos' class='btn btn-primary'>Gerenciar produtos</a>";
		break;

	case 'cadastrar-usuario':
		if ($_POST["tipo_usuario"] == "1") {
			$foto = "atendente.jpg";
		} else {
			$foto = "usuario.png";
		}

		$nome = $_POST["nome_usuario"];
		$email = $_POST["email_usuario"];
		$usuario = $_POST["usuario"];
		$senha = $_POST["senha_usuario"];
		$tipo = $_POST["tipo_usuario"];
		$status = "ativo";
		$sql = "SELECT usuario FROM usuario WHERE usuario = '{$usuario}'";

		$res = $conn->query($sql) or die($conn->error);

		$row = $res->fetch_object();

		$qtd = $res->num_rows;

		if ($qtd > 0) {
			print "<div class='alert alert-danger'>Email e ou usuario repetidos.</div>";
			print "<a href='?page=gerenciar-usuarios' class='btn btn-primary'>Gerenciar usuários</a>";
			break;
			if ($qtd > 0) {
			} else {
				$sql = "SELECT usuario FROM usuario WHERE email_usuario = '{$email}'";

				$res = $conn->query($sql) or die($conn->error);

				$row = $res->fetch_object();

				$qtd = $res->num_rows;
				if ($qtd > 0) {
					print "<div class='alert alert-danger'>Email e ou usuario repetidos.</div>";
				} else {
					$sql = "INSERT INTO usuario (nome_usuario,email_usuario,usuario,senha_usuario,tipo_usuario,status_usuario,foto_usuario) VALUES ('{$nome}','{$email}','{$usuario}','" . md5($senha) . "','{$tipo}','{$status}', '{$foto}')";
					$res = $conn->query($sql) or die($conn->error);
					print "<div class='alert alert-success'>Cadastrado com sucesso</div>";
				}
			}
		} else {
			$sql = "SELECT usuario FROM usuario WHERE email_usuario = '{$email}'";

			$res = $conn->query($sql) or die($conn->error);

			$row = $res->fetch_object();

			$qtd = $res->num_rows;
			if ($qtd > 0) {
				print "<div class='alert alert-danger'>Email e ou usuario repetidos.</div>";
			} else {
				$sql = "INSERT INTO usuario (nome_usuario,email_usuario,usuario,senha_usuario,tipo_usuario,status_usuario,foto_usuario) VALUES ('{$nome}','{$email}','{$usuario}','" . md5($senha) . "','{$tipo}','{$status}', '{$foto}')";
				$res = $conn->query($sql) or die($conn->error);
				print "<div class='alert alert-success'>Cadastrado com sucesso</div>";
			}
		}
		print "<a href='?page=gerenciar-usuarios' class='btn btn-primary'>Gerenciar usuários</a>";
		break;
	case "editar-usuario":
		$nome = $_POST["nome_usuario"];
		$email = $_POST["email_usuario"];
		$usuario = $_POST["usuario"];
		$tipo = $_POST["tipo_usuario"];
		$sql = "UPDATE usuario SET nome_usuario='{$nome}', email_usuario='{$email}', usuario='{$usuario}', tipo_usuario='{$tipo}' WHERE id_usuario=" . $_REQUEST['id_usuario'];

		$res = $conn->query($sql) or die($conn->error);

		if ($res == true) {
			print "<div class='alert alert-success'>Editado com sucesso</div>";
		} else {
			print "<div class='alert alert-danger'>Não foi possível editar.</div>";
		}
		print "<a href='?page=gerenciar-usuarios' class='btn btn-primary'>Gerenciar usuários</a>";
		break;
	case "editar-perfil":
		$nome = $_POST["nome_usuario"];
		$email = $_POST["email_usuario"];
		$usuario = $_POST["usuario"];
		$sql = "UPDATE usuario SET nome_usuario='{$nome}', email_usuario='{$email}', usuario='{$usuario}' WHERE id_usuario=" . $_REQUEST['id_usuario'];

		$res = $conn->query($sql) or die($conn->error);

		if ($res == true) {
			print "<div class='alert alert-success'>Editado com sucesso</div>";
		} else {
			print "<div class='alert alert-danger'>Não foi possível editar, entre em contato pelo Whatsapp.</div>";
		}
		print "<a href='?page=editar-perfil' class='btn btn-primary'>Atualizar</a>";
		break;
	case "editar-senha":
		$senhaAntiga = $_POST["senha_antiga"];

		$sql = "SELECT usuario FROM usuario WHERE senha_usuario = '" . md5($senhaAntiga) . "' AND id_usuario=" . $_SESSION['id'];

		$res = $conn->query($sql) or die($conn->error);

		$row = $res->fetch_object();

		$qtd = $res->num_rows;
		if ($qtd > 0) {
			$novaSenha = $_POST["nova_senha"];
			$repetirSenha = $_POST["repetir_senha"];
			if ($novaSenha == $repetirSenha) {
				$sql = "UPDATE usuario SET senha_usuario='" . md5($novaSenha) . "' WHERE id_usuario=" . $_REQUEST['id_usuario'];

				$res = $conn->query($sql) or die($conn->error);

				if ($res == true) {
					print "<div class='alert alert-success'>Editado com sucesso</div>";
				} else {
					print "<div class='alert alert-danger'>Não foi possível editar, entre em contato pelo Whatsapp.</div>";
				}
			}else {
				print "<div class='alert alert-danger'>Não foi possível editar, entre em contato pelo Whatsapp.</div>";
			}
		} else {
			print "<div class='alert alert-danger'>Não foi possível editar.</div>";
		}


		print "<a href='?page=editar-perfil' class='btn btn-primary'>Atualizar</a>";
		break;
	case "editar-foto":
		$pasta      = "img/";
		$tmp_name   = $_FILES["foto"]["tmp_name"];
		$nome       = $_FILES["foto"]["name"];
		$cod        = $_FILES["foto"]["name"];
		$uploadfile = $pasta . basename($cod);

		if (move_uploaded_file($tmp_name, $uploadfile)) {
			$sql = "UPDATE usuario SET foto_usuario='{$cod}' WHERE id_usuario=" . $_SESSION['id'];
			$res = $conn->query($sql) or die($conn->error);
			if ($res == true) {
				print "<div class='alert alert-success'>Foto alterada com sucesso</div>";
				$_SESSION['foto'] = $cod;
			} else {
				print "<div class='alert alert-danger'>Não foi possível enviar alterar.</div>";
			}
			print "<a href='?page=editar-perfil' class='btn btn-primary'>Atualizar</a>";
		} else {
			print "Não foi possível enviar arquivo para a pasta";
		}
		break;
}
