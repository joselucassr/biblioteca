<h1>Listar Categoria</h1>

<?php 

	$sql = "SELECT * FROM categoria";

	$res = $conn -> query($sql) or die ($conn -> error);

	$qtd = $res -> num_rows;


	if ($qtd > 0) {
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";

		print "<table class='table table-borderless table-hover'>
					<tr>
						<th>#</th>
						<th>Nome da Categoria</th>
					</tr>";

		while ($row = $res -> fetch_assoc()) {
			print '<tr>';
				print'<td>'. $row['id_categoria'] . '</td>';
				print'<td>'. $row['nome_categoria'] . '</td>';
			print '</tr>';
		}
		
		print '</table>';

	} else {
		print "<p>Não encontrou resultados</p>";
	}
?>