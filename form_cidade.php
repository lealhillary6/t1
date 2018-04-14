<?php
	include("cabecalho.php");
?>

<!--Hillary Leal -->

<!DOCTYPE html>
<html lang = "pt-BR">
	<head>
		<title>form_cidade.php</title>
		<meta charset = "UTF-8" />
		<link rel = "stylesheet" type = "text/css" href = "estilos.css" />
	</head>
	
	<body>
		<fieldset>
		<legend>Preencha o seguinte formulário :</legend>
			 <form action = "cadastra_cidade.php" method = "post" enctype = "multipart/form-data">
				<p>
					<label for = "nome" >
						Nome do Estado :
					</label>
					<select name = "nome">
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
				<label>Nome da Cidade:</label>
				<input type="text" id="nomecid" name="nomecid"/>
			</p>
			
			<p>
				<input type = "submit" name ="submeter" value = "Enviar" />
			</p>

		</fieldset>
	</body>
</html>	
		