<?php 
date_default_timezone_set('America/Sao_Paulo');
$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "meu_crud";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);


$query = "SELECT * FROM CADASTROS";
$consulta_cadastro = mysqli_query($conexao, $query);

			
