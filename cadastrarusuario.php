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
</body>
</html>