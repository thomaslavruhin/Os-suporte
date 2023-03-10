<?php

require_once "Conexao.php";

try{
    $Conexao        = Conexao::getConnection();
    $query          = $Conexao->query("SELECT idTipo, nomeTipo FROM tipo");
    $tipos     = $query->fetchAll();
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
    <title> Lista de Tipos </title>
    <!-- CSS only -->
    <script src="https://kit.fontawesome.com/a60023a2e4.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> 
    <style type="text/css">
        #tamanhoContainer {width: 600px;
            /*height:700px;*/
            -webkit-box-shadow: 0px 0px 41px -4px rgba(0,0,0,0.75);
            -moz-box-shadow: 0px 0px 41px -4px rgba(0,0,0,0.75);
            box-shadow: 0px 0px 41px -4px rgba(0,0,0,0.75);
        }
    </style>
</head>
<body>
<?php require_once "header.php" ?>   
<div  style="margin-top: 30px">
    <div style="padding: 10px">
    <div class="mb-3">
<center>    
<h3> Lista de Tipos</h3>
<br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Tipo</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
    
        <?php
               foreach($tipos as $tipo) {
            ?>
        <tr>
        <td><?php echo $tipo['nomeTipo'];?></td>
     
        <td><a class="btn btn-secondary btn-sm" href="editarTipo.php?id=<?php echo $idTipo ?>" role="button" ><i class="fa-regular fa-pen-to-square"></i> Editar</button></a>
        <a class="btn btn-danger btn-sm" href="deletarTipo.php?id=<?php echo $idTipo ?>" role="button" ><i class="fa-solid fa-delete-left"></i> Excluir</button></a>
        <?php } ?>
        </tr>
                
        </center>            
  </tbody>
</table>
           
<div style="text-align: right;">
            <a href="menu.php" role="button" class="btn btn-primary"> Voltar</a>
            <a href="adicionarTipo.php" role="button" class="btn btn-success"> Adicionar Tipo</a>
</div>
      

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  
</body>
</html>