<?php

	$nome = @$_REQUEST["nome_autor"];

	switch (@$_REQUEST["acao"]) {
		case "cadastrar":
			$sql = "INSERT INTO autor (nome_autor) VALUES ('{$nome}')";

			$res = $conn->query($sql) or die($conn -> error);

			if ($res==true) {
				print "<script>alert('Cadastrou com sucesso!');</script>";
				print "<script>location.href='index.php?page=cad-autor';</script>";
			} else{
				print "<script>alert('Cadastro não efetuado!');</script>";
				print "<script>location.href='index.php?page=cad-autor';</script>";
			}
			break;
		
		default:
			# code...
			break;
	}

?>