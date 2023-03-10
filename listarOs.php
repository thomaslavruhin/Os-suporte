<?php

require_once "Conexao.php";

try{
    $Conexao        = Conexao::getConnection();
    $query          = $Conexao->query("SELECT * FROM os_suporte");
    $os     = $query->fetchAll();
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
    <title> Lista de Chamados </title>
    <!-- CSS only -->
    <script src="https://kit.fontawesome.com/a60023a2e4.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> 
    <style type="text/css">
    </style>
</head>
<body>
<?php require_once "header.php" ?> 
<div style="margin-top: 30px">
    <div style="padding: 10px">
    <div class="mb-3">
    <center>    
<h3> Lista de Chamados</h3>
</center>
    <table class="table table-striped">
        <thead>
            <tr>

    <?php
$listagem = $Conexao->prepare("SELECT * FROM os_suporte ORDER BY id_os DESC");
$listagem->execute();
while($lista = $listagem->fetch(PDO::FETCH_ASSOC)):
?>
<tr>
        <td>
        <a class="btn btn-secondary btn-sm" href="editarOs.php?id=<?php echo $id_os ?>" role="button" ><i class="fa-regular fa-pen-to-square"></i> Editar</button></a>
        <a class="btn btn-danger btn-sm" href="confirmarDel.php?id=<?php echo $id_os ?>" role="button" ><i class="fa-solid fa-trash-can"></i> Excluir</button></a>
        </td>
        <td><?php echo $lista['id_os'];?></td>
        <td><?php echo $lista['nomeSolicitante'];?></td>
        <td><?php echo $lista['departamentoSolicitante'];?></td>
        <td><?php echo $lista['solicitacao'];?></td>
        <td><?php echo $lista['local'];?></td>
        <td><?php echo $lista['categoria'];?></td>
        <td><?php echo $lista['tipo'];?></td>
        <td><?php echo $lista['horaData'];?></td>
        <td><?php echo $lista['responsavel'];?></td>
        <td><?php echo $lista['solucao'];?></td>
        <td><?php echo $lista['statusOs'];?></td>
        <td>
        <a class="btn btn-danger btn-sm" href="indeferidoOs.php?id=<?php echo $id_os ?>" role="button" ><i class="fa-solid fa-triangle-exclamation"></i> </button></a>    
        <a class="btn btn-warning btn-sm" href="andamentoOs.php?id=<?php echo $id_os ?>" role="button" ><i class="fa-solid fa-spinner"></i> </button></a>    
        <a class="btn btn-success btn-sm" href="solucao.php?id=<?php echo $id_os ?>" role="button" ><i class="fa-solid fa-check"></i> </button></a>
</td><br>
<?php endwhile; ?>
</tr>
</table>        
<div style="text-align: right;">

            <a href="menu.php" role="button" class="btn btn-primary"> Voltar</a>
            <a href="adicionarOs.php" role="button" class="btn btn-success"> Adicionar OS</a>
            
                </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
                
    </html>