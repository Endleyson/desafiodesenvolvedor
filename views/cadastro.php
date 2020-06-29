<a class="btn btn-success" href="?pagina=inserir_cadastro">Inserir novo cadastro</a>

<table class="table table-hover table-striped" id="cadastro">
	<thead>
		<tr>
			<th>Nome</th>
			<th>Data nascimento</th>
			<th>Sexo</th>
			<th>Data de Cadastro</th>
			<th>Data da Alteração</th>
			<th>Editar</th>
			<th>Deletar</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			while($linha = mysqli_fetch_array($consulta_cadastro)){
				echo '<tr><td>'.$linha['nome_cadastro'].'</td>';
				echo '<td>'.$linha['data_nascimento'].'</td>';
				echo '<td>'.$linha['sexo_cadastro'].'</td>';
				echo '<td>'.$linha['data_cadastro'].'</td>';
				echo '<td>'.$linha['data_alterada'].'</td>';
			?>

		
			<td><a href="?pagina=inserir_cadastro&editar=<?php echo $linha['id_cadastro']; ?>">Editar</a></td>
			<td><a href="deleta_cadastro.php?id_cadastro=<?php echo $linha['id_cadastro']; ?>">Deletar</a></td></tr>

		<?php
			}
		?>
	</tbody>

</table>