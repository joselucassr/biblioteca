<?php

	// conexão com o banco de dados 
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db   = "biblioteca";

	$conn = new mysqli($host, $user, $pass, $db);

	// Teste de criação de menu Dropdown

    $query_autor = "SELECT id_autor FROM 'autor'";

    $result_autor = mysqli_query($conn, $query_autor);

	// includes das páginas
	switch (@$_REQUEST["page"]) {
		// autor
		case "cad-autor":
			include("autor/cadastrar-autor.php");
			break;

		case "lis-autor":
			include("autor/listar-autor.php");
			break;

		case "edi-autor":
			include("autor/editar-autor.php");
			break;

		case "sal-autor":
			include("autor/salvar-autor.php");
			break;

		// categoria
		case "cad-categoria":
			include("categoria/cadastrar-categoria.php");
			break;

		case "lis-categoria":
			include("categoria/listar-categoria.php");
			break;

		case "edi-categoria":
			include("categoria/editar-categoria.php");
			break;

		case "sal-categoria":
			include("categoria/salvar-categoria.php");
			break;

		// livro
		case "cad-livro":
			include("livro/cadastrar-livro.php");
			break;

		case "lis-livro":
			include("livro/listar-livro.php");
			break;

		case "edi-livro":
			include("livro/editar-livro.php");
			break;

		case "sal-livro":
			include("livro/salvar-livro.php");
			break;
		
		// dashboard
		default:
			include("dashboard.php");
	}

?>