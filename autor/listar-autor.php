<h1>Listar Autor</h1>

<?php 

	$sql = "SELECT * FROM autor";

	$res = $conn -> query($sql) or die ($conn -> error);

	$qtd = $res -> num_rows;


	if ($qtd > 0) {

		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";

		print "<table class='table table-borderless table-hover'>
					<tr>
						<th>#</th>
						<th>Nome do Autor</th>
					</tr>";

		while ($row = $res -> fetch_assoc()) {
			$id_autor = $row['id_autor'];
			$nome_autor = $row['nome_autor'];

			print '<tr>';
				print'<td>'. $id_autor . '</td>';
				print'<td>'. $nome_autor . '</td>';
			print '</tr>';
		}
		
		print '</table>';

	} else {
		print "<p>Não encontrou resultados</p>";
	}
?>