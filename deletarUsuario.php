<?php
include 'conexao.php';
 $id = $_GET['id'];

 $sql = "DELETE FROM usuarios WHERE idusuario = $id";
 $deletar = mysqli_query($conexao, $sql);
 
header("Location: listarUsuarios.php");
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> 
<div class="container" style= "width: 500px; margin-top: 200px">
    <center>
            <h3>Usuário deletado sucesso</h3>
            <div style="margin-top:20px">
            <a href="listarUsuarios.php" role="button" class="btn btn-primary"> Voltar</a>
            </div>
        </center>
        <div>