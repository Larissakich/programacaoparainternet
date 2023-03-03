<?php
	/*1. Faça um programa que calcula e mostre o percentual de frequência de um estudante. Para isso, considere que 120 períodos correspondem a 100% da carga horária.*/

	$presenca = 70;

	$freq = ($presenca / 120) * 100;

	echo ("Frequencia é de $freq %<br>");

	// 2. Escreva um programa que verifica se um número é par ou ímpar.
	$numero = 10;

	if ($numero % 2 == 0)
		echo ("$numero é par<br>");
	else 
		echo ("$numero é ímpar<br>");

	// Crie um programa que verifica se um número inteiro é positivo, negativo ou zero.

	if ($numero > 0)	
		echo ("$numero é positivo<br>");
	else if ($numero < 0)
		echo ("$numero é negativo<br>");
	else 
		echo ("Zero<br>");

	//Faça um programa que escreve uma data por extenso, lendo os dados de três variáveis (representando uma data). Exemplo: 15/03/2023 → 15 de março de 2023.

	$dia = 3; 
	$mes = 3; 
	$ano = 2023;

	$data = "$dia de ";
	if ($mes == 1)
		$data = $data . "janeiro";
	else if ($mes == 2)
		$data = $data . "fevereiro";	
	else if ($mes == 3)
		$data = $data . "março";
	else if ($mes == 4)
		$data = $data . "abril";
	else if ($mes == 5)
		$data = $data . "maio";
	else if ($mes == 6)
		$data = $data . "junho";
	else if ($mes == 7)
		$data = $data . "juho";
	else if ($mes == 8)
		$data = $data . "agosto";
	else if ($mes == 9)
		$data = $data . "setembro";
	else if ($mes == 10)
		$data = $data . "outubro";
	else if ($mes == 11)
		$data = $data . "novembro";
	else if ($mes == 12)
		$data = $data . "dezembro";

	$data .= " de $ano";

	echo ($data);
?>