<?php

include 'conexao.php';

$id = $_GET['id']

?>

<!DOCTYPE html>
<html>
<Head>
<meta charset="utf-8">
    <meta name="viewport" content="initial-scale=0.8 user-scalable=on" />
    <Title>OS Suporte</Title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
    crossorigin="anonymous">
    <style type="text/css">
        #tamanhoContainer {width: 800px;
            -webkit-box-shadow: 0px 0px 41px -4px rgba(0,0,0,0.75);
            -moz-box-shadow: 0px 0px 41px -4px rgba(0,0,0,0.75);
            box-shadow: 0px 0px 41px -4px rgba(0,0,0,0.75);
        }
    </style>
</Head>

    <body>
    <?php require_once "header.php" ?>
    <div class="container" id="tamanhoContainer" style="margin-top: 10px">
    <div style="padding: 10px">
    <div class="mb-3">    
            <h1>Editar Ordem de Serviço ao Suporte</h1>
            <br>


            <h3> Informações do solicitante:</h3>
            <form action="atualizarOs.php" method="post" style="margin-top: 20px">
                <?php
                    $sql = "SELECT * FROM `os_suporte` WHERE id_os = $id";
                    $buscar = mysqli_query($conexao, $sql);
                    while ($array = mysqli_fetch_array($buscar)) {
                        
                        $id_os = $array ['id_os'];
                        $nomeSolicitante = $array ['nomeSolicitante'];
                        $departamentoSolicitante = $array ['departamentoSolicitante'];
                        $solicitacao = $array ['solicitacao'];
                        $local = $array ['local_'];
                        $categoria = $array ['categoria'];
                        $tipo = $array ['tipo'];
                        $statusOs = $array ['statusOs'];

                ?>

                <div class="form-group">
                    <label>Número da OS:</label>
                    <input type="int" class="form-control" name="id_os" value = "<?php echo $id_os ?> " disabled>
                    <input type="int" class="form-control" name="id" value = "<?php echo $id ?> " style="display: none">
                </div> 

                <div class="form-group">
                    <label>Nome do solicitante:</label>
                    <input type="name" class="form-control" name="nomeSolicitante" value = "<?php echo $nomeSolicitante ?>" required>
                </div>    
                <div class="form-group">
                    <label>Departamento do solicitante:</label>
                    <input type="text" class="form-control" name="departamentoSolicitante" value = "<?php echo $departamentoSolicitante ?>" required>
                </div>
            <br>
            <div class="form-group">
                    <label>Categoria:</label>
                    <input type="text" class="form-control" name="categoria" value = "<?php echo $categoria ?>" required disabled>
                </div>
                <br>
                <div class="form-group">
                    <label>Tipo:</label>
                    <input type="text" class="form-control" name="tipo" value = "<?php echo $tipo ?>" required disabled>
                </div>
            <br>
            <div class="form-group">
                    <label>Solicitação:</label>
                    <input type="text" class="form-control" name="solicitacao" value = "<?php echo $solicitacao ?>" required>
                </div>
                <div class="form-group">
                    <label>Local:</label>
                    <input type="text" class="form-control" name="local" value = "<?php echo $local ?>" required>
                </div>
            <br>
            <div class="form-group">
                    <label> Status</label>
                    <select name="statusOs" class="form-control">
                    <option></option>   
                    <option>Em Aberto</option>
                    <option>Finalizada</option>            
                    </select>
                </div>
                <br>            
                <div style="text-align: right;">
                    <a href="listarOs.php" role="button" class="btn btn-primary"> Voltar</a>
                    <button type="submit" class="btn btn-warning">Atualizar</buttom>    
                </div>

                    
                </div>
            </div>

        <?php
        }
        ?>

            </form>
        </div>
    </div>
    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  
    </body>
</html>
