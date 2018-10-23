<div class="col-6 mx-auto">
	<h1 class="text-center">Cadastrar Livro</h1>

	<form action="index.php?page=sal-livro&acao=cadastrar" method="POST">

        <!-- Tentativa de Mostrar os autores a partir de um dropdown menu -->
        <div class="form-group">
            <label>Nome do Autor</label>
           <?php
           // Teste de criação de menu Dropdown

            $query_autor = "SELECT id_autor,nome_autor  FROM autor";
            $result_autor = mysqli_query($conn, $query_autor);

            $opt = "<select class='form-control' name='autor_livro'>";

                while ($row_autor = mysqli_fetch_assoc($result_autor)){
                    @$opt .= "<option value = '{$row_autor['id_autor']}'>{$row_autor['nome_autor']}</option>";
                }

            $opt .= "</select>";

           echo $opt;

            ?>

        </div>

        <label>Nome da Categoria</label>
        <div class="form-group">

            <?php
            // Teste de criação de menu Dropdown

            $query_categoria = "SELECT id_categoria, nome_categoria FROM categoria";
            $result_categoria = mysqli_query($conn, $query_categoria);

            $opt = "<select class='form-control' name='categoria_livro'>";

            while ($row_categoria = mysqli_fetch_assoc($result_categoria)){
                @$opt .= "<option value = '{$row_categoria['id_categoria']}'>{$row_categoria['nome_categoria']}</option>";
            }

            $opt .= "</select>";

            echo $opt;

            ?>

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