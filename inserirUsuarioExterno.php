<?php
include 'conexao.php';
include 'script/password.php';

$nomeUsuario = $_POST['nomeUsuario'];
$mail = $_POST ['mailUsuario'];
$senha = $_POST ['senhaUsuario'];
//$nivel = $_POST ['nivelUsuario'];
$statusUsuario = 'Inativo';

$sql = "INSERT INTO usuarios (nomeUsuario, mailUsuario, senhaUsuario, statusUsuario) values ('$nomeUsuario','$mail',sha1('$senha'),'$statusUsuario')";
$inserir = mysqli_query($conexao, $sql);

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<div class="container" style= "width: 500px; margin-top: 200px">
    <center>
    <h4> Usuário adicionado com sucesso! Esperando aprovação.</h4>
        <a href="index.php" role="button" class="btn btn-primary"> Voltar</a>
    </div>
    </center>
</div>