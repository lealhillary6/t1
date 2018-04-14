<?php
include("cabecalho.php");
?>
<!--Hillary Leal -->
<fieldset>	
<?php

	$nomeuser = $_POST["nomeuser"];
	$mail = $_POST["mail"];
	$sexo = $_POST["sexo"];
	$nomecid = $_POST["nomecid"];
	$nomeest = $_POST["nomeest"];
	

  if(!file_exists('cadastro.xml')){
        $fp = fopen("cadastro.xml", "a");                    
        $conteudo = '<?xml version = "1.0"?><trabalhos></trabalhos>';
        fwrite($fp, $conteudo);
        fclose($fp);
    }
	$arquivo = 'cadastro.xml';
    $xml = simplexml_load_file($arquivo);
	
	$posicao=sizeof($xml->cadastro);
	
	$xml->cadastro[$posicao]->nomeuser= $_POST["nomeuser"];
    $xml->cadastro[$posicao]->mail = $_POST["mail"];
	$xml->cadastro[$posicao]->sexo = $_POST["sexo"];
	$xml->cadastro[$posicao]->nomecid = $_POST["nomecid"];
	$xml->cadastro[$posicao]->nomeest = $_POST["nomeest"];
    $xml->asXML($arquivo);
	echo"Dados registrados";


?>
</fieldset>