<?php

# Base de dados
include 'db.php';

# Cabeçalho
include 'header.php';

# Conteúdo da página
if(isset($_GET['pagina'])){
	$pagina = $_GET['pagina'];
}
else{
	$pagina = 'home';
}

switch($pagina){
	case 'cadastro': include 'views/cadastro.php'; break;
	case 'inserir_cadastro': include 'views/inserir_cadastro.php'; break;
	default: include 'views/home.php'; break;
}

# Rodapé
include 'footer.php';
