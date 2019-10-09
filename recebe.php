<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');
include_once("connection/conexao.php");
$ip = $_SERVER['REMOTE_ADDR'];

$nome = $_POST['name'];
$email = $_POST['email'];
$data = date('d/m/Y \à\s H:i:s');

$string_sql = "INSERT INTO usuarios (id,email,nome,ip,data_hora) VALUES (null, '{$email}', '{$nome}', '$ip', '$data')";
$resultado = mysqli_query($conn, $string_sql);

if (mysqli_insert_id($conn)) {
	$_SESSION['msg'] = "<p style='color:blue;'>Cadastrao realizado, aguarde o recebimento no e-mail informado.</p>"; 
	header("Location: index.html");
}else{
	header("Location: index.html");
}

mysql_close($conn);
?>