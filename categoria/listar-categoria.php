<h1>Listar Categoria</h1>

<!-- Notificação do resultado -->
	<div class="row col-12 text-center">
	    <?php
	    session_start();    
	    if (isset($_SESSION['msg'])){
	        echo $_SESSION['msg'];
	        session_unset();
	    }
	    ?>
	</div>

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
						<th>Ações</th>
					</tr>";

		while ($row = $res -> fetch_assoc()) {
			$id_categoria = $row['id_categoria'];

			print '<tr>';
				print '<td>'. $id_categoria . '</td>';
				print '<td>'. $row['nome_categoria'] . '</td>';
				print '<td><a href="index.php?page=edi-categoria&id_categoria='.$id_categoria.'"><i class="far fa-edit"></i></a></td>';
			print '</tr>';
		}
		
		print '</table>';

	} else {
		print "<p>Não encontrou resultados</p>";
	}
?>