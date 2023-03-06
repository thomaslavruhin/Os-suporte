<?php

include 'conexao.php';

$nomeSolicitante = $_POST['nomeSolicitante'];
$departamentoSolicitante = $_POST['departamentoSolicitante'];
$solicitacao = $_POST['solicitacao'];
$local = $_POST['local'];
$categoria = $_POST['categoria'];
$tipo = $_POST['tipo'];
$horaData = $_POST['horaData'];
$statusOs = 'Novo';


$sql = "INSERT INTO `os_suporte`( `nomeSolicitante`, `departamentoSolicitante`, `solicitacao`, `local_`, `categoria`, `tipo`, `horaData`, `statusOs` ) 
VALUES ('$nomeSolicitante','$departamentoSolicitante','$solicitacao','$local','$categoria','$tipo','$horaData','$statusOs')";

$inserir = mysqli_query($conexao, $sql);
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<meta http-equiv="refresh" content="10; URL='listarOs.php'"/>

<div class="container" style= "width: 500px; margin-top: 200px">
    <center>
    <h4> Ordem de serviço cadastrada com sucesso!</h4>
        <a href="menu.php" role="button" class="btn btn-primary"> Voltar</a>
    </div>
    </center>
</div>