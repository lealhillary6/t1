<?php
	include("cabecalho.php");
?>

<!--Denise Soares -->

<!DOCTYPE html>
<html lang = "pt-BR">
	<head>
		<title>index_estado.php</title>
		<meta charset="UTF-8" />
		<link rel = "stylesheet" type = "text/css" href = "estilos.css" />
	</head>
	<body>	
		<fieldset>	
			<legend>Tabelas</legend>
				<br />
				<table>
					<tr><th>Estados</th></tr>
					<tr>
						<td>
							<?php
							if(file_exists("estados.xml")){
							header('content-type:text/html; charset=utf-8');
							$xml = simplexml_load_file('estados.xml');
								echo"<table border = '1' class='table' width='250px' align='center'>
								<tr>	
									<th>Nome do Estado </th>
									<th>Sigla</th>
								</tr>";
							}
							else{
								echo"Não há registros";
							}	
							$contador = 0;
							
							foreach($xml->estados as $estados){
								echo"<tr>
										<td>$estados->nomeestado</td>
										<td>$estados->sigla</td>
									</tr>";
							}
							?>
						</td>
					</tr>
				</table>
				<br />
				<table>
					<tr><th>Cidades</th	></tr>
					<tr>
						<td>
							<?php
							if(file_exists("cidades.xml")){
							header('content-type:text/html; charset=utf-8');
							$xml = simplexml_load_file('cidades.xml');
								echo"<table border = '1' class='table' width='250px' align='center'>
								<tr>	
									<th>Estado </th>
									<th>Nome da cidade</th>
								</tr>";
							}
							else{
								echo"Não há registros";
							}
							$contador = 0;
							
							foreach($xml->cidades as $cidades){
								echo"<tr>
										<td>$cidades->nome</td>
										<td>$cidades->nomecid</td>
									</tr>";
							}
							?>
						</td>	
					<tr>
				</table>
				<br />				
				<table>
					<tr><th>Cadastros</th></tr>
					<tr>
						<td>
							<?php
							if(file_exists("cadastro.xml")){
							header('content-type:text/html; charset=utf-8');
							$xml = simplexml_load_file('cadastro.xml');
								echo"<table border = '1' class='table' width='250px' align='center'>
								<tr>	
									<th>Nome</th>
									<th>Email</th>
									<th>Sexo </th>
									<th>Nome da cidade </th>
									<th>Nome do estado </th>
								</tr>";
							}
							else{
								echo"Não há registros";
							}
							$contador = 0;
							
							foreach($xml->cadastro as $cadastro){
								echo"<tr>
										<td>$cadastro->nomeuser</td>
										<td>$cadastro->mail</td>
										<td>$cadastro->sexo</td>
										<td>$cadastro->nomecid</td>
										<td>$cadastro->nomeest</td>
									</tr>";
							}
							?>
						</td>
					</tr>
				</table>
		</fieldset>		
	</body>	
</html>