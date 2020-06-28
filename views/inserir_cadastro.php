<?php if(!isset($_GET['editar'])){ ?>

<h1>Inserir novo cadastro</h1>
<form method="post" action="processa_cadastro.php">
	<br>
	<label class="badge badge-secondary">Nome:</label><br>
	<input class="form-control" type="text" name="nome_cadastro" placeholder="Insira o nome ">
	<br><br>
	<label class="badge badge-secondary">Data de nascimento:</label><br>
	<input class="form-control" type="date" name="data_nascimento" ><br><br>
	<label class="badge badge-secondary">Sexo:</label><br>
	<input class="form-control" type="text" name="sexo_cadastro" placeholder="Insira o Sexo ">
	<br><br>
	<input type="submit" class="btn btn-success" value="Inserir Cadastro">
	<br>
</form>

<?php } else { ?>
	<?php while($linha = mysqli_fetch_array($consulta_cadastro)){ ?>
		<?php if($linha['id_cadastro'] == $_GET['editar']){ ?>
			<h1>Editar Cadastro</h1>
				<form method="post" action="edita_cadastro.php">
					<input type="hidden" name="id_cadastro" value="<?php echo $linha['id_cadastro']; ?>">
					<br>
					<label class="badge badge-secondary">Nome:</label><br>
					<input class="form-control" type="text" name="nome_cadastro" placeholder="Insira o nome do cadastro" value="<?php echo $linha['nome_cadastro']; ?>">
					<br><br>
					<label class="badge badge-secondary">Data de nascimento:</label><br>
					<input class="form-control"  type="date" name="data_nascimento" placeholder="Insira a data de nascimento " value="<?php echo $linha['data_nascimento']; ?>"><br><br>
					<label class="badge badge-secondary">Sexo:</label><br>
					<input class="form-control" type="text" name="sexo_cadastro" placeholder="Insira o sexo" value="<?php echo $linha['sexo_cadastro']; ?>">
					<br><br>
					<input class="btn btn-success" type="submit" value="Salvar alterações ">
				</form>
			<?php } ?>
	<?php } ?>
<?php } ?>