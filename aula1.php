<?php
	// exemplo de declaracao de variaveis
	
	$nome = "Anderson";  
	$idade = 18;
	$peso = 78.9;
	$encontrado = true;

	$nome .= " da Silva";
	echo ("Bem vindo, " . $nome);

	// estrutura de decisao
	if ($idade >= 18){
		echo ("<br><b>Maior</b> de idade");
	} else {
		echo ("<br><b>Menor</b> de idade");
	}

	// exemplo de ifs aninhados (com mais de uma condição)

	$numero = 1;
	echo ("<br>"); //quebra de linha para todos os echos abaixo
	if ($numero == 1)
		echo ("UM");
	else if ($numero == 2)
		echo ("DOIS");
	else if($numero == 3)
		echo ("TRÊS");
	else if ($numero == 4)
		echo ("QUATRO");
	else if ($numero == 5)
		echo ("CINCO");
	else  
		echo ("Número inválido");

	$passouNoTeste = false;
	// para poder tirar a CNH, precisa ter idade >= 18 e tambem passar no teste psicológico
	// E lógico - && ou AND
	// OR lógico - || ou OR
	// NOT lógico - ! ou NOT
	// == true pode ser omitido
	if ($idade >= 18 && $passouNoTeste == true){
		echo ("APTO A TIRAR A CNH");
	} else if ($idade < 18){
		echo ("Você não pode tirar a CNH, pois é menor de idade");
	} else {
		echo ("Você precisa ser aprovado no teste pscicológico");
	}