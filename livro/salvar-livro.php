<?php
	session_start();

    $autor       = @$_REQUEST["autor_livro"];
    $categoria   = @$_REQUEST["categoria_livro"];
	$titulo      = @$_REQUEST["titulo_livro"];
	$editora     = @$_REQUEST["editora_livro"];
	$local       = @$_REQUEST["local_livro"];
	$ano         = @$_REQUEST["ano_livro"];


	switch (@$_REQUEST["acao"]) {
		case "cadastrar":
			$sql = "INSERT INTO livro (categoria_id_categoria, autor_id_autor, titulo_livro, editora_livro, local_livro, ano_livro) VALUES ('$categoria', '$autor', '$titulo', '$editora', '$local', '$ano')";

			$res = $conn->query($sql);

			if ($res==true) {
				$_SESSION['msg'] = '<div class="alert alert-success">Cadastro com sucesso!</div>';
				header("Location: index.php?page=lis-livro");
			} else{
				print "<br> <div class='alert alert-danger'>Não foi possível cadastrar!</div>";
			}
			break;
		
		case "editar":
			# code...
			break;

		case "excluir":
			# code...
			break;

		default:
			# code...
			break;
	}
?>