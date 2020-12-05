<?php
session_start();

if(empty($_POST) or (empty($_POST["usuario"]) or (empty($_POST["senha_usuario"]) ) ) ){
print "<script>location.href='index.php';</script>";
}

include("config.php");

$usuario = $_POST["usuario"];
$senha   = $_POST["senha_usuario"];

$sql = "SELECT * FROM usuario WHERE usuario = '{$usuario}' AND senha_usuario  = '".md5($senha)."' ";

$res = $conn->query($sql) or die($conn->error);

$row = $res->fetch_object();

$qtd = $res->num_rows;

if($qtd>0){
$_SESSION["id"]    = $row->id_usuario;
$_SESSION["nome"]  = $row->nome_usuario;
$_SESSION["email"]  = $row->email_usuario;
$_SESSION["usuario"]  = $row->usuario;
$_SESSION["tipo"]  = $row->tipo_usuario;
$_SESSION["foto"]  = $row->foto_usuario;
if($_SESSION["tipo"]==1){
	print "<script>location.href='area-administrador.php';</script>";
}else{
	print "<script>location.href='area-funcionario.php';</script>";

}

}else{
unset($usuario);
print "<script>alert('Usuário e/ou senha incorretos ou usuário inativo.');</script>";
print "<script>location.href='pg-logar.php';</script>";
}
