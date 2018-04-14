<?php
	include("cabecalho.php");
?>

<!--Hillary Leal -->

<!DOCTYPE html>
<html lang = "pt-BR">
	<head>
		<title>form_cadastro.php</title>
		<meta charset = "UTF-8" />
		<link rel = "stylesheet" type = "text/css" href = "estilos.css" />
	</head>
	
	<body>
		<fieldset>
		<legend>Preencha o seguinte formulário :</legend>
			 <form action = "cadastra_usuario.php" method = "post" enctype = "multipart/form-data">
			 
				<p>
					<label>Nome:</label>
					<input type="text" id="nomeuser" name="nomeuser"/>
				</p>
				<p>
					<label>Email:</label>
					<input type="mail" id="mail" name="mail"/>
				</p>
				<p>
					<label>Sexo:</label>
					<select id="sexo" name="sexo">
						<option value="masc">Masculino</option>
						<option value="fem">Feminino</option>
					</select>
				</p>
				<p>
					<label>Nome da cidade:</label>
					<input type="text" id="nomecid" name="nomecid"/>
				</p>
				<p>
				<label for = "nomeest" >
						Nome do Estado :
					</label>
					<select name = "nomeest">
					<option>::Selecione::</option>
						<option>Acre</option>
						<option>Alagoas</option>
						<option>Amapá</option>
						<option>Amazonas</option>
						<option>Bahia</option>
						<option>Ceará</option>
						<option>Distrito Federal</option>
						<option>Espírito Santo</option>
						<option>Goiás</option>
						<option>Maranhão</option>
						<option>Mato Grosso</option>
						<option>Mato Grosso do Sul</option>
						<option>Minas Gerais</option>
						<option>Pará</option>
						<option>Paraíba</option>
						<option>Paraná</option>
						<option>Pernambuco</option>
						<option>Piauí</option>
						<option>Rio de Janeiro</option>
						<option>Rio Grande do Norte</option>
						<option>Rio Grande do Sul</option>
						<option>Rondônia</option>
						<option>Roraima</option>
						<option>Santa Catarina</option>
						<option>São Paulo</option>
						<option>Sergipe</option>
						<option>Tocantins</option>
					</select>
				</p>
				<p>
					<input type="submit" value="Enviar"/>
					<input type="reset" value="Apagar"/>
				</p>

		</fieldset>
	</body>
</html>	
		