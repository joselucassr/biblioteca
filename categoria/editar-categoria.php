<h1 class="col-6 mx-auto">Editar Categoria</h1>

<?php 

	$sql = "SELECT * FROM categoria where id_categoria = ".$_REQUEST["id_categoria"];
	
	$res = $conn -> query($sql);

	$row = $res -> fetch_assoc();

?>

<form action="index.php?page=sal-categoria" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_categoria" value="<?php print $_REQUEST["id_categoria"] ?>">
	<div class="form-group col-6 mx-auto">
		<label>Nome da Categoria</label>
		<input type="text" name="nome_categoria" class="form-control" value="<?php print $row['nome_categoria'] ?>">
	</div>
	<div class="form-group col-6 mx-auto">
		<button class="btn btn-outline-info" type="submit">Enviar</button>
	</div>
</form>