<?php 

include 'db.php';

$id_cadastro = $_GET['id_cadastro'];

$query = "DELETE FROM CADASTROS WHERE ID_CADASTRO = $id_cadastro";

mysqli_query($conexao, $query);

header('location:index.php?pagina=cadastro');
