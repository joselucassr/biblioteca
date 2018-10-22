<div class="col-6 mx-auto">
	<h1 class="text-center">Cadastrar Livro</h1>

	<form action="index.php?page=sal-livro&acao=cadastrar" method="POST">

        <!-- Tentativa de Mostrar os autores a partir de um dropdown menu -->
        <div class="form-group">
            <select class="form-control" name="autor_livro">
                <option value="Escolha um" selected>Escolha um</option>
                <?php include '../config.php';?>
                <?php while ($row_autor = mysqli_fetch_assoc($result_autor)):; ?>
                <option value="<?php echo $row_autor["id_autor"];?>"><?php echo $row_autor["id_autor"]; ?></option>
                <?php endwhile; ?>
            </select>
        </div>

		<div class="form-group">
			<label>Título do Livro</label>
			<input type="text" name="titulo_livro" class="form-control">
		</div>

		<div class="form-group">
			<label>Editora do Livro</label>
			<input type="text" name="editora_livro" class="form-control">
		</div>

		<div class="form-group">
			<label>Local do Livro</label>
			<input type="text" name="local_livro" class="form-control">
		</div>

		<div class="form-group">
			<label>Ano do Livro</label>
			<input type="text" name="ano_livro" class="form-control">
		</div>

		<div class="form-group	">
			<button class="btn btn-outline-info" type="submit">Enviar</button>
		</div>
	</form>
</div>