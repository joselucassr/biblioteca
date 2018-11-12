<?php
	session_start();

	$nome = @$_REQUEST["nome_categoria"];

	switch (@$_REQUEST["acao"]) {
		case "cadastrar":
			$sql = "INSERT INTO categoria (nome_categoria) VALUES ('{$nome}')";

			$res = $conn->query($sql);

			if ($res==true) {
				print "<br> <div class='alert alert-success'>Cadastro com sucesso!</div>";
			} else{
				print "<br> <div class='alert alert-danger'>Não foi possível cadastrar!</div>";
			}
			break;

		case "editar":
			$sql = "UPDATE categoria SET nome_categoria = '$nome' WHERE id_categoria = ".$_REQUEST["id_categoria"];

			$res = $conn -> query($sql);

			if ($res==true) {
				$_SESSION['msg'] = '<div class="alert alert-success">Atualizado com sucesso!</div>';
				header("Location: index.php?page=lis-categoria");
			} else{
				$_SESSION['msg'] = '<div class="alert alert-danger">Não foi possível atualizar!;</div>';
				header("Location: index.php?page=lis-categoria");
			}

			break;
		
		default:
			# code...
			break;
	}

?>