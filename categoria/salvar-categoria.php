<?php

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
		
		default:
			# code...
			break;
	}

?>