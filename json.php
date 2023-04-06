<?php

require_once "Conexao.php";

try{
    $Conexao        = Conexao::getConnection();
    $query          = $Conexao->query("SELECT * FROM usuarios");
    $os     = $query->fetchAll();
    }catch(Exception $e){
    echo $e->getMessage();
    exit;
 }
?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=0.8 user-scalable=on" />
        <Title>JSON</Title>
        <script src="https://kit.fontawesome.com/a60023a2e4.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> 
    <style type="text/css">
        #tamanhoContainer {width: 1600px;
          
            -webkit-box-shadow: 0px 0px 41px -4px rgba(0,0,0,0.75);
            -moz-box-shadow: 0px 0px 41px -4px rgba(0,0,0,0.75);
            box-shadow: 0px 0px 41px -4px rgba(0,0,0,0.75);
        }
    </style>
    </head>
    <body>

    <?php require_once "header.php" ?>
    <div class="container" id="tamanhoContainer" style="margin-top: 120px;border-radius: 15px; border: 2px solid #f1f1f1 ">
    <div style="padding: 5px">
    <center>
    <div class="jumbotron">
        <h1 class="display-4">JSON</h1>
     
        <hr class="my-4">

        
</center>
</div>
<?php
$lista = array (
    array('Nome', 'Telefone', 'Endereço'),
    array('Pessoa1', '456', 'Rua XXX'),
    array('Pessoa2', '789', 'Rua yyy')
);

//JSON
//https://blog-en.openalfa.com/how-to-read-and-write-json-files-in-php
//https://stackoverflow.com/questions/3281354/create-json-object-the-correct-way
//criando o array que vai conter os dados dos contatos
$json = array();
$lin=0;
foreach ($lista as $linha) {
	if ($lin==0){
		$key = $linha;
	}else{
		$json[] = array_combine($key, $linha);
	}
	$lin++;
}
//criando o conjunto de contatos
$contatos = array ('conato' => $json);
//alocando os contatos no array agenda
$agenda = array('agenda' => $contatos);
//definido o arquivo resultante
$fh = fopen("contatos.json", 'w');
//salvando o arquivo 
fwrite($fh, json_encode($agenda,JSON_UNESCAPED_UNICODE));
//fechando o arquivo
fclose($fh);

//conversão online
//http://www.utilities-online.info/xmltojson
//validação online JSON
//https://jsonlint.com/
echo $lista;
?>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


</body>
</html>


