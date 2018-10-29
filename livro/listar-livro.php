<h1>Listar Livro</h1>

<?php 

	$sql = "SELECT * FROM livro";

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
			$id_livro = $row['id_livro'];
			$id_categoria = $row['categoria_id_categoria'];
			$id_autor = $row['autor_id_autor'];
			$titulo_livro = $row['titulo_livro'];
			$editora_livro = $row['editora_livro'];
			$local_livro = $row['local_livro'];
			$ano_livro = $row['ano_livro'];

			print '<tr>';

				print'<td>'. $id_livro . '</td>';
				
				// Mostrar o valor da chave estrangeira da categoria
				$query_categoria = "SELECT nome_categoria FROM categoria where id_categoria='$id_categoria'";
	            $result_categoria = mysqli_query($conn, $query_categoria);

                while ($row_categoria = mysqli_fetch_assoc($result_categoria)){
                    print "<td>".$row_categoria['nome_categoria']."</td>";
                }
				

				// Mostrar o valor da chave estrangeira do autor
				$query_autor = "SELECT nome_autor FROM autor where id_autor='$id_autor'";
	            $result_autor = mysqli_query($conn, $query_autor);

                while ($row_autor = mysqli_fetch_assoc($result_autor)){
                    print "<td>".$row_autor['nome_autor']."</td>";
                }



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