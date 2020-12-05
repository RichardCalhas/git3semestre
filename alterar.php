<?php
include("config.php");
$usuario = $_POST["usuario"];
$senha   = $_POST["senha_usuario"];
$email   = $_POST["email_usuario"];

$sql = "UPDATE usuario SET senha_usuario  = '" . md5($senha) . "' WHERE usuario='{$usuario}' AND email_usuario='{$email}'";
$res = $conn->query($sql) or die($conn->error);

if ($res == true) {
	print "<br><div id='msg-sucesso' style='text-align: center; background-color: rgba(50,205,50,.3); border: 1px solid rgb(34,139,34);'>Alterado com sucesso! :) <a href='index.php'>Acesse <strong> para entrar</strong></a></div>";
} else {
	print "<br><div class='msg-erro'  style='text-align: center; background-color: rgba(250,128,114,.3); border: 1px solid rgb(165,42,42);'>NÃO FOI POSSIVEL EDITAR.</div>";
}
