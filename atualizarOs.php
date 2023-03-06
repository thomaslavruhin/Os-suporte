<?php

include 'conexao.php';

$id = $_POST['id'];
$nomeSolicitante =  $_POST['nomeSolicitante'];
$departamentoSolicitante =  $_POST['departamentoSolicitante'];
$solicitacao = $_POST['solicitacao'];
$local = $_POST['local'];
$statusOs = $_POST['statusOs'];

$sql = "UPDATE `os_suporte` SET `nomeSolicitante`='$nomeSolicitante',`departamentoSolicitante`='$departamentoSolicitante',`solicitacao`='$solicitacao',`local_`='$local',`statusOs`='$statusOs' WHERE id_os = $id";

$atualizar = mysqli_query($conexao,$sql);


?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> 
<div class ="container" style= "width: 500px; margin-top: 200px">
        <center>
            <h3>Atulizado com sucesso</h3>
            <div style="margin-top:20px">
            <a href="listarOs.php" role="button" class="btn btn-primary"> Voltar</a>
            </div>
        </center>
        <div>