<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="initial-scale=0.8 user-scalable=on" />
    <title> Chamados Novos </title>
    <!-- CSS only -->
    <script src="https://kit.fontawesome.com/a60023a2e4.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> 
    <style type="text/css">
        #tamanhoContainer {width: 1600px;
            height:700px;
            -webkit-box-shadow: 0px 0px 41px -4px rgba(0,0,0,0.75);
            -moz-box-shadow: 0px 0px 41px -4px rgba(0,0,0,0.75);
            box-shadow: 0px 0px 41px -4px rgba(0,0,0,0.75);
        }
    </style>
</head>
<body>
<?php require_once "header.php" ?>
<div class="container-fluid" >

    <div style="padding: 10px">
    <div class="mb-3">
<center>    
<h3>Chamados Novos</h3>
<br>
    <table class="table table-striped">
        <thead>
     
            <tr>
                <th scope="col">Ação</th>
                <th scope="col">ID</th>
                <th scope="col">Solicitante</th>
                <th scope="col">Departamento</th>
                <th scope="col">Categoria</th>
                <th scope="col">Tipo</th>
                <th scope="col">Solicitação</th>
                <th scope="col">Local</th>
                <th scope="col">Data da OS</th>
                <th scope="col">Status</th>
                
            </tr>
        </thead>
    
      <?php
        include 'conexao.php';
        $sql= "SELECT * FROM `os_suporte` WHERE statusOs =  'novo'";
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
            $statusOs = $array ['statusOs'];
        
        ?>

        <tr>
        <td>
        <a class="btn btn-secondary btn-sm" href="editarOs.php?id=<?php echo $id_os ?>" role="button" ><i class="fa-regular fa-pen-to-square"></i> Editar</button></a>
        <a class="btn btn-danger btn-sm" href="confirmarDel.php?id=<?php echo $id_os ?>" role="button" ><i class="fa-solid fa-trash-can"></i> Excluir</button></a>
        </td>
        <td><?php echo $id_os?></td>
        <td><?php echo $nomeSolicitante?></td>
        <td><?php echo $departamentoSolicitante?></td>
        <td><?php echo $categoria?></td>
        <td><?php echo $tipo?></td>
        <td><?php echo $solicitacao?></td>
        <td><?php echo $local?></td>
        <td><?php echo $horaData?></td>
        <td><?php echo $statusOs?></td>
        
        <td>
        <a class="btn btn-danger btn-sm" href="indeferidoOs.php?id=<?php echo $id_os ?>" role="button" ><i class="fa-solid fa-triangle-exclamation"></i> </button></a>    
        <a class="btn btn-warning btn-sm" href="andamentoOs.php?id=<?php echo $id_os ?>" role="button" ><i class="fa-solid fa-spinner"></i> </button></a>    
        <a class="btn btn-success btn-sm" href="solucao.php?id=<?php echo $id_os ?>" role="button" ><i class="fa-solid fa-check"></i> </button></a>
        
        <?php } ?>
        </tr> 
        </center>        
  </body>
</table>        
<div style="text-align: right;">

            <a href="menu.php" role="button" class="btn btn-primary"> Voltar</a>
            <a href="adicionarOs.php" role="button" class="btn btn-success"> Adicionar OS</a>
            
                </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
                
</body>
</html>