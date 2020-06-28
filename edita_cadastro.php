<?php 

include 'db.php';

$id_cadastro = $_POST['id_cadastro'];
$nome_cadastro = $_POST['nome_cadastro'];
$data_nascimento = $_POST['data_nascimento'];
$sexo_cadastro= $_POST['sexo_cadastro'];


$query = "UPDATE CADASTROS SET nome_cadastro='$nome_cadastro', data_nascimento='$data_nascimento', sexo_cadastro = '$sexo_cadastro', data_cadastro= now() WHERE id_cadastro = $id_cadastro";

#print($query);
mysqli_query($conexao, $query);

header('location:index.php?pagina=cadastro');
