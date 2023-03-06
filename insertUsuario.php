<?php
include 'conexao.php';
include 'script/password.php';

$nomeUsuario = $_POST['nomeUsuario'];
$mail = $_POST ['mailUsuario'];
$senha = $_POST ['senhaUsuario'];
$nivel = $_POST ['nivelUsuario'];
$status = 'Ativo';

$sql = "INSERT INTO usuarios (nomeUsuario, mailUsuario, senhaUsuario, nivelUsuario, status) values ('$nomeUsuario','$mail',sha1('$senha'),'$nivel','$status')";
$inserir = mysqli_query($conexao, $sql);

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<div class="container" style= "width: 500px; margin-top: 200px">
    <center>
    <h4> Usuário adicionado com sucesso!</h4>
        <a href="cadastroUsuario.php" role="button" class="btn btn-primary"> Voltar</a>
    </div>
    </center>
</div>