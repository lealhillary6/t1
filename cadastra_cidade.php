<?php
include("cabecalho.php");
?>
<!--Hillary Leal -->
<fieldset>	
<?php
	$nome = $_POST["nome"];
	$nomecid = $_POST["nomecid"];

  if(!file_exists('cidades.xml')){
        $fp = fopen("cidades.xml", "a");                    
        $conteudo = '<?xml version = "1.0"?><trabalhos></trabalhos>';
        fwrite($fp, $conteudo);
        fclose($fp);
    }
	$arquivo = 'cidades.xml';
    $xml = simplexml_load_file($arquivo);
	
	$posicao=sizeof($xml->cidades);
	
	$xml->cidades[$posicao]->nome= $_POST["nome"];
    $xml->cidades[$posicao]->nomecid = $_POST["nomecid"];
    $xml->asXML($arquivo);
	echo"Dados registrados";
	
?>
</fieldset>