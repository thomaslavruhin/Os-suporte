<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="initial-scale=0.8 user-scalable=on" />
    <title> Lista de Usuários </title>
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
    <div  style="margin-top: 30px">
    <div style="padding: 10px">
    <div class="mb-3">
<center>    
<h3> Lista de Usuários</h3>
</center>
<br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Nível</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
    
      <?php
        include 'conexao.php';
        $sql= "SELECT * FROM `usuarios` ORDER BY idUsuario ";
        $busca = mysqli_query($conexao, $sql);
        
        while ($array = mysqli_fetch_array($busca)){

            $idUsuario = $array ['idUsuario'];
            $nomeUsuario = $array ['nomeUsuario'];
            $mailUsuario = $array ['mailUsuario'];
            $nivelUsuario = $array ['nivelUsuario'];
            $statusUsuario = $array ['statusUsuario'];        
        ?>
        <tr>
        <td><?php echo $idUsuario?></td>
        <td><?php echo $nomeUsuario?></td>
        <td><?php echo $mailUsuario?></td>
        <td><?php echo $nivelUsuario?></td>
        <td><?php echo $statusUsuario?></td>
        
        <td><a class="btn btn-secondary btn-sm" href="editarUsuario.php?id=<?php echo $idUsuario ?>" role="button" ><i class="fa-regular fa-pen-to-square"></i> Editar</button></a>
        <a class="btn btn-danger btn-sm" href="deletarUsuario.php?id=<?php echo $idUsuario ?>" role="button" ><i class="fa-solid fa-delete-left"></i> Excluir</button></a>
        <?php } ?>
        </tr>         
  </tbody>
</table>        
<div style="text-align: right;">
<a href="menu.php" role="button" class="btn btn-primary"> Voltar</a>
<a href="cadastroUsuario.php" role="button" class="btn btn-success"> Adicionar Usuário</a>
            
                </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
                
</body>
</html>