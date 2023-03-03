<?php
	// exemplos de laços de repetição
	// laço for tem 3 condições
	// inicialização: i=0
	// saida: i<10
	// condicao: incremento da variavel
	for($i=0; $i<100; $i++){
		echo ("Executando o for pela vez: $i <br>");
	}

	$status = true;
	// ao usar o while, é preciso ter uma condicao de saida
	$i = 0;
	while ($status == true){
		echo ("Executa o laço enquanto o status for TRUE<br>");
		$i++;
		// definindo a condicao de saida
		// forma 1
		if ($i == 10)
			//$status = false;	// ao mudar o valor da variavel, o laço será interrompido
		// forma 2 de interromper o while: usar um break
		break;
	}

	// do while é um laço de repetição com pós validacao
	$acertou = true;
	$i=0;
	do {
		echo ("Exucutando o laço do while<br>");
		// precisa ser definida a condicao de saida
		$i++;
		if ($i==10)
			$acertou = true;

	} while ($acertou != true); //(!$acertou) outra forma de escrever a mesma condicao