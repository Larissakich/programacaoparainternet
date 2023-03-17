<?php

	if (! isset($_POST["enviar"]) )
		header("location: aula5.php");

	// cricao de variaveis para armazenar as informações digitadas pelo usuário
	$nome = $_POST["nome"];
	$nascimento = $_POST["nasc"];
	$nume = $_POST["tel"];
	$senha = $_POST["senha"];



	// empty - serve para testar se uma variavel esta preechida

	if (empty($nome) )
		echo ("Preencha o campo Nome");
	else if (empty($nascimento))
		echo ("Preencha o campo Nascimento");
	else if (empty($nume))	
		echo ("Preencha o campo Número telefônico");
	else if (empty($senha))
		echo ("Preencha o campo Senha");
	else{
		echo ("Nome: $nome <br>");	
		echo ("Nascimento: $nascimento <br>");	
		echo ("Numero telefônico: $nume <br>");	
		echo ("Senha: $senha <br>");
	}

?>