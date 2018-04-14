<?php
include("cabecalho.php");
?>
<!--Denise Soares -->
<fieldset>	
<?php
	$nome = $_POST["nome"];
	$sigla = $_POST["sigla"];

  if(!file_exists('estados.xml')){
        $fp = fopen("estados.xml", "a");                    
        $conteudo = '<?xml version = "1.0"?><trabalhos></trabalhos>';
        fwrite($fp, $conteudo);
        fclose($fp);
    }
	$arquivo = 'estados.xml';
    $xml = simplexml_load_file($arquivo);
	
	$posicao=sizeof($xml->estados);
	
	$xml->estados[$posicao]->nomeestado= $_POST["nome"];
    $xml->estados[$posicao]->sigla = $_POST["sigla"];
    $xml->asXML($arquivo);
	echo"Dados registrados";
?> 
</fieldset>	
	