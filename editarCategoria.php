<?php

include 'conexao.php';

$id = $_GET['id']

?>

<!DOCTYPE html>
<html>
<Head>
<meta charset="utf-8">
    <meta name="viewport" content="initial-scale=0.8 user-scalable=on" />
    <Title>Editar Categoria</Title>
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
    <div class="container" id="tamanhoContainer" style="margin-top: 10px">
    <div class="mb-3">
        
            <h1>Editar Categoria</h1>
            <br>


            <h3> Informações da Categoria:</h3>
            <form action="atualizarCategoria.php" method="post" style="margin-top: 20px">
                <?php
                    $sql = "SELECT * FROM `categoria` WHERE idCategoria = $id";
                    $buscar = mysqli_query($conexao, $sql);
                    while ($array = mysqli_fetch_array($buscar)) {
                        
                        $idCategoria = $array ['idCategoria'];
                        $nomeCategoria = $array ['nomeCategoria'];
                                   

                ?>

                <div class="form-group">
                    <label>Nome da categoria:</label>
                    <input type="text" class="form-control" name="nomeCategoria" value = "<?php echo $nomeCategoria ?>" required>
                    <input type="text" class="form-control" name="idCategoria" value = "<?php echo $idCategoria ?> " style="display: none">
                </div>    
                <br>
                <div style="text-align: right;">
                    <a href="listarCategoria.php" role="button" class="btn btn-primary"> Voltar</a>
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
