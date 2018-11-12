<h1 class="col-6 mx-auto">Cadastrar Autor</h1>

<form action="index.php?page=sal-autor&acao=cadastrar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="form-group col-6 mx-auto">
		<label>Nome do Autor</label>
		<input type="text" name="nome_autor" class="form-control">
	</div>
	<div class="form-group col-6 mx-auto">
		<button class="btn btn-outline-info" type="submit">Enviar</button>
	</div>
</form>