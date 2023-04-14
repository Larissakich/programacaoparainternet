<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="POST">
		<fieldset>
			<legend>Novo usuário</legend>
			<div class="input-group">
				<label>Nome</label>
				<input type="text" name="nome"> <br>
			</div>
			<div class="input-group">
				<label>Nascimento</label>
				<input type="date" name="nascimento"><br>
			</div>
			<div class="input-group">
				<label>Sexo</label>
				<input type="radio" name="sexo" value="f"> Feminino
				<input type="radio" name="sexo" value="m"> Masculino
				<input type="radio" name="sexo" value="i"> Intersexo
			</div>
			<div class="input-group">
				<label>Telefone</label>
				<input type="tel" name="fone" pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" placeholder="(51) 9 9110 6123"> <br>
			</div>
			<div class="input-group">
				<label>Rede social</label>
				<input type="url" name="link"> <br>
			</div>
			<div class="input-group">
				<label>Estado</label>
				<select name="estado">
					<option>Rio Grande do Sul</option>
				</select> <br>
			</div>
			<div class="input-group">
				<label>Cidade</label>
				<select name="cidade">
					<option>Rolante</option>
					<option>Igrejinha</option>
				</select> <br>
			</div>
			<div class="input-group">
				<label>Você aceita os termos</label>
				<input type="radio" name="concordancia" value="sim"> Sim
				<input type="radio" name="concordancia" value="nao" checked> Não <br>
			</div>
			<input type="submit" name="enviar" value="Finalizar cadastro">
		</fieldset>
	</form>
	<?php
		// usuario clicou no botao enviar
		if (isset($_POST['enviar'])) {

			// testa se o usuario marcou a opcao sim para aceitar os termos
			if ($_POST['concordancia'] == "sim") {
				// armazenando os valores dos inputs em variaveis
				$nome = $_POST['nome'];
				$nasc = $_POST['nascimento'];
				$sexo = $_POST['sexo'];
				$fone = $_POST['fone'];
				$link_rede_social = $_POST['link'];
				$cidade = $_POST['cidade'];

				if (empty($nome)){
					echo ("Preencha o <b>nome</b> corretamente");
				} else if (empty($nasc)){
					echo ("Prrencha o <b>nascimento</b> corretamente");
				} else if (empty($sexo)){
					echo ("Necessário escolher o <b>sexo</b> corretamente");
				} else if (empty($fone)){
					echo ("Preencha o <b>fone</b> corretamente");
				} else if ($cidade == "" ){
					echo ("Preencha a <b>cidade</b> corretamente");
				} else {
					// pela lógica utilizada, se chegar nesse else é por que tudo está preenchido
					// ip do banco de dados, usuario, senha, nome_do_banco
					$conn = mysqli_connect("localhost", "root", "", "programacaoparainternet"); 

					if ($conn) {
						// conexão com sucesso
						$sql = "INSERT INTO usuarios (nome, nascimento, sexo, telefone, redesocial, cidade) VALUES ('$nome', '$nasc', '$sexo', '$fone', '$link_rede_social', '$cidade')";

						if (mysqli_query($conn, $sql)){
							echo ("Usuário salvo com sucesso");
						} else {
							echo ("Erro: $sql " . mysqli_error($conn) );
						}
					} else {
						echo ("Houve um erro conectar com o banco de dados " . mysqli_connect_error() );
					}
				}

			} else {
				echo ("Você precisa concordar para finalizar o cadastro");
			}
		}
	?>
</body>
</html>