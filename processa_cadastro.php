<?php 

include 'db.php';

$nome_cadastro = $_POST['nome_cadastro'];
$data_nascimento = $_POST['data_nascimento'];
$sexo_cadastro= $_POST['sexo_cadastro'];



$query = "INSERT INTO CADASTROS(nome_cadastro, data_nascimento, sexo_cadastro, data_cadastro) VALUES('$nome_cadastro', '$data_nascimento', '$sexo_cadastro', now(), now())";

mysqli_query($conexao, $query);

header('location:index.php?pagina=cadastro');
