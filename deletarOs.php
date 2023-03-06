<?php
include 'conexao.php';
 $id = $_GET['id'];

 $sql = "DELETE FROM `os_suporte` WHERE id_os = $id";
 $deletar = mysqli_query($conexao, $sql)
 

?>
<meta http-equiv="refresh" content="0.4; URL='listarOs.php'"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> 
<div class="container" style= "width: 500px; margin-top: 200px">
    <center>
            <h1>ORDEM DE SERVIÇO DELETADA!</h1>
           
        </center>
        <div>
            
