<?php

include 'conexao.php';

$id = $_GET['id'];
$nivel = $_GET['nivel'];

if ($nivel == 1){

    $update = "UPDATE usuarios SET statusUsuario= 'Ativo', nivelUsuario = 1 WHERE idUsuario = $id";
    $atualizacao = mysqli_query($conexao, $update);
}
if ($nivel == 2){

    $update = "UPDATE usuarios SET statusUsuario= 'Ativo', nivelUsuario = 2 WHERE idUsuario = $id";
    $atualizacao = mysqli_query($conexao, $update);
}
if ($nivel == 3){

    $update = "UPDATE usuarios SET statusUsuario= 'Ativo', nivelUsuario = 3 WHERE idUsuario = $id";
  $atualizacao = mysqli_query($conexao, $update);
}

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> 
<div class ="container" style= "width: 500px; margin-top: 200px">
        <center>
            <h3>Atulizado com sucesso</h3>
            <div style="margin-top:20px">
            <a href="aprovarUsuario.php" role="button" class="btn btn-primary"> Voltar</a>
            </div>
        </center>