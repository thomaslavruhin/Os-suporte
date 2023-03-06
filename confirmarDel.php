<?php

include 'conexao.php';

$id = $_GET['id']

?>

<!DOCTYPE html>
<html>
<Head>
    <meta carset="utf-8">
    <Title>Confirmar Exclusão</Title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
    crossorigin="anonymous">
    <style type="text/css">
        #tamanhoContainer {width: 1600px;
            height:700px;
            -webkit-box-shadow: 0px 0px 41px -4px rgba(0,0,0,0.75);
            -moz-box-shadow: 0px 0px 41px -4px rgba(0,0,0,0.75);
            box-shadow: 0px 0px 41px -4px rgba(0,0,0,0.75);
        }
    </style>
</Head>
    <body>
    <?php require_once "header.php" ?>
    <div class="container" id="tamanhoContainer" style="margin-top: 60px">
        <center>    
<h1> Confirmação de Exclusão</h1>
<br>
</center>
<br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Solicitante</th>
                <th scope="col">Departamento</th>
                <th scope="col">Categoria</th>
                <th scope="col">Tipo</th>
                <th scope="col">Solicitação</th>
                <th scope="col">Local</th>
                <th scope="col">Data da OS</th>
                
            </tr>
        </thead>
    
      <?php
        include 'conexao.php';
        $sql= "SELECT * FROM `os_suporte` WHERE id_os = $id";
        $busca = mysqli_query($conexao, $sql);
        while ($array = mysqli_fetch_array($busca)){

            $id_os = $array ['id_os'];
            $nomeSolicitante = $array ['nomeSolicitante'];
            $departamentoSolicitante = $array ['departamentoSolicitante'];
            $solicitacao = $array ['solicitacao'];
            $local = $array ['local_'];
            $categoria = $array ['categoria'];
            $tipo = $array ['tipo'];
            $horaData = $array ['horaData'];
        
        ?>
        <tr>
        <td><?php echo $id_os?></td>
        <td><?php echo $nomeSolicitante?></td>
        <td><?php echo $departamentoSolicitante?></td>
        <td><?php echo $categoria?></td>
        <td><?php echo $tipo?></td>
        <td><?php echo $solicitacao?></td>
        <td><?php echo $local?></td>
        <td><?php echo $horaData?></td>
        
        <td>
        <?php } ?>
        </tr>         
  </tbody>
</table>    
<br>
<center>  
    <a class="btn btn-danger btn-lg " href="deletarOS.php?id=<?php echo $id_os ?>" role="button" ><i class="fa-solid fa-trash-can-xmark"></i> CONFIRMAR EXCLUSÃO</button></a>
    <br><br>
    <a class="btn btn-secondary btn-lg " href="listarOs.php" role="button" > CANCELAR </button></a>
    
</center>
    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  
    </body>
</html>
