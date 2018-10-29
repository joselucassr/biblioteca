<h1>Listar Livro</h1>

<?php 

	$sql = "SELECT a.*, l.*, c.* FROM livro as l 
			INNER JOIN autor AS a 
			ON l.autor_id_autor = a.id_autor
			INNER JOIN categoria AS c
			ON l.categoria_id_categoria = c.id_categoria";

	$res = $conn -> query($sql) or die ($conn -> error);

	$qtd = $res -> num_rows;


	if ($qtd > 0) {

		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";

		print "<table class='table table-borderless table-hover'>
					<tr>
						<th>#</th>
						<th>Categoria do Livro</th>
						<th>Autor do Livro</th>
						<th>Título do Livro</th>
						<th>Editora do Livro</th>
						<th>Local do Livro</th>
						<th>Ano do Livro</th>
					</tr>";

		while ($row = $res -> fetch_assoc()) {
			$id_livro        = $row['id_livro'];
			$categoria_livro = $row['nome_categoria'];
			$autor_livro     = $row['nome_autor'];
			$titulo_livro    = $row['titulo_livro'];
			$editora_livro   = $row['editora_livro'];
			$local_livro     = $row['local_livro'];
			$ano_livro       = $row['ano_livro'];

			print '<tr>';

				print'<td>'. $id_livro . '</td>';

                print'<td>'. $categoria_livro . '</td>';
                print'<td>'. $autor_livro . '</td>';


				print'<td>'. $titulo_livro . '</td>';
				print'<td>'. $editora_livro . '</td>';
				print'<td>'. $local_livro . '</td>';
				print'<td>'. $ano_livro . '</td>';
			print '</tr>';
		}
		
		print '</table>';

	} else {
		print "<p>Não encontrou resultados</p>";
	}
?>