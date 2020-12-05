<?php
include("config.php");
$to = $_POST["email_usuario"];
$usuario = $_POST["usuario"];

$sql = "SELECT usuario FROM usuario WHERE usuario = '{$usuario}' AND email_usuario  = '{$to}' ";

$res = $conn->query($sql) or die($conn->error);

$row = $res->fetch_object();

$qtd = $res->num_rows;

if($qtd>0){
$to = $_POST["email_usuario"];
$assunto = "Recuperar Senha";
$mensagem = "Olá ".$_POST["usuario"].", Clique para recuperar a senha <a href=https://helpservicesteste.000webhostapp.com/alterar-senha.php>https://helpservicesteste.000webhostapp.com/alterar-senha.php</a>";
$email = 'helpteste@atendimento.com';
$usuario = $_POST["usuario"];

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: ' . $email . "\r\n" .
'Reply-To: ' . $email . "\r\n" .
'X-Mailer: PHP/' . phpversion();

$status = mail($to, $assunto, $mensagem, $headers);
print "<br><div id='msg-sucesso' style='text-align: center; background-color: rgba(50,205,50,.3); border: 1px solid rgb(34,139,34);'>E-mail enviado com sucesso! :) <a href='index.php'>Acesse <strong> para entrar</strong></a></div>";
}else{
print "Dados nao conferem :(";
}
?>
