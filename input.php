<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		input:invalid {
			color: red;
		}
	</style>
</head>
<body>
	<form method="POST">
		Checkbox: Por que você estuda no Instituto Federal?
		<div>
			<input type="checkbox" name="if_publico" value="publico" checked>
			<label for="publico"> Por ser gratuito</label>
		</div>
		<div>
			<input type="checkbox" name="indicacao" value="indicacao">
			<label for="indicacao">Indicação de amigos</label>
		</div>
		<div>
			<input type="checkbox" name="proximidade" value="proximidade">
			<label for="proximidade">Por ser próximo a minha casa</label>
		</div>

		Radio: Sexo
		<input type="radio" name="sexo" value="f" checked> Feminino
		<input type="radio" name="sexo" value="m"> Masculino
		<input type="radio" name="sexo" value="i"> Intersexo

		Date: Data de nascimento
		<input type="date" name="nascimento" > <br>


		Email
		<input type="email" name="email"> <br>

		Color: qual sua cor favorita?
		<input type="color" name="cor"> <br>

		Number
		<input type="number" name="numero" min="0" max="100"> <br>

		Tel: <input type="tel" name="fone" pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" placeholder="(51) 9 9110 6123"> <br>

		Time: <input type="time" name="horario">

		URL: 
		<input type="url" name="endereco"> <br>

		<!-- veremos em uma aula específica como fazer o upload de arquivos -->
		<input type="file" name="arquivo">

		Textarea: Fale sobre você <br>
		<textarea rows="3" cols="25"></textarea>

		<input type="submit" name="enviar" value="Enviar">
	</form>
	<?php
		if (isset($_POST["enviar"])){
			// testa se o usuario marcou a primeira opcao
			// se não está vazia a variavel, mostra a mensagem
			if (!empty($_POST["if_publico"]))
				echo ("Clicou em: Por ser gratuito<br>");

			// testa se o usuario marcou a segunda opcao
			if (!empty($_POST["indicacao"]))
				echo ("Clicou em: Por indicação de amigos<br>");

			// testa se o usuario marcou a terceira opcao
			if (!empty($_POST["proximidade"]))
				echo ("Clicou em: Por ser próximo a minha casa<br>");

			//echo ("Conteúdo: " . $_POST["proximidade"]);
			
			// recuperando uma informação de um input do tipo radio
			$sexo = $_POST["sexo"];

			if ($_POST["sexo"] == "f")
				echo ("Sexo selecionado: feminino<br>");
			else if ($_POST["sexo"] == "m")
				echo ("Sexo selecionado: masculino<br>");
			else
				echo ("Sexo selecionado: intersexo<br>");

			echo ("Nascimento: " . $_POST["nascimento"] . "<br>");

			echo ("Email: " . $_POST["email"] . "<br>");

			echo ("Cor escolhida: " . $_POST["cor"] . "<br>");

			echo ("Número telefônico: " . $_POST["fone"] . "<br>");
			
			echo ("Horario escolhido: " . $_POST["horario"] . "<br>");
		}
	?>
</body>
</html>