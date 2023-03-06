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
            height:720px;
            -webkit-box-shadow: 0px 0px 41px -4px rgba(0,0,0,0.75);
            -moz-box-shadow: 0px 0px 41px -4px rgba(0,0,0,0.75);
            box-shadow: 0px 0px 41px -4px rgba(0,0,0,0.75);
        }
    </style>
</Head>

    <body>
    <?php require_once "header.php" ?>
<div class="container" id="tamanhoContainer" style="margin-top: 20px">
    <div style="padding: 10px">
    <div class="mb-3">
        <center>
            <h2>Ordem de Serviço ao Suporte</h2>
            <br>

        </center>
            <h3> Informações do solicitante:</h3>
            <form action="enviarOs.php" method="post" style="margin-top: 20px">
                <div class="form-group">
                    <label>Nome do solicitante:</label>
                    <input type="name" class="form-control" name="nomeSolicitante" placeholder="Insira o nome de quem solicitou a inclusão" autocomplete="off" required>
                </div>    
                <div class="form-group">
                    <label>Departamento do solicitante:</label>
                    <input type="text" class="form-control" name="departamentoSolicitante" placeholder="Insira o departamento de quem solicitou a inclusão" autocomplete="off" required>
                </div>
            <br>

            <h3>Dados da Solicitação: </h3>

            <div class="form-group">
                    <label>Categoria:</label>
                    <br>
                    <select class="form-control" name="categoria">
                        <?php
                        include 'conexao.php';
                        $sql = "SELECT * FROM categoria order by nomeCategoria ASC";
                        $buscar = mysqli_query($conexao,$sql);

                        while ($array = mysqli_fetch_array($buscar)){

                            $idCategoria = $array['idCategoria'];
                            $nomeCategoria = $array['nomeCategoria'];

                            ?>

                            <option><?php echo $nomeCategoria ?></option>
                        
                            <?php } ?>
                    </select>
                </div>
            <br>
            
            <div class="form-group">
                    <label>Tipo:</label>
                    <br>
                    <select class="form-control" name="tipo">
                        <?php
                        include 'conexao.php';
                        $sql = "SELECT * FROM tipo order by nomeTipo ASC";
                        $buscar = mysqli_query($conexao,$sql);

                        while ($array = mysqli_fetch_array($buscar)){

                            $idTipo = $array['idTipo'];
                            $nomeTipo = $array['nomeTipo'];

                            ?>

                            <option><?php echo $nomeTipo ?></option>
                        
                            <?php } ?>
                    </select>
                </div>
            <br>
                <div class="form-group">
                    <label>Solicitação:</label>
                    <input type="text" class="form-control" name="solicitacao" placeholder="Informe a solicitação"  autocomplete="off" required>
                </div>
            <br>
                <div class="form-group">
                    <label>Local:</label>
                    <input type="text" class="form-control" name="local" placeholder="Informe o local" autocomplete="off" required>
                </div>
                <br>
                
                <div class="form-group">
                <?php $date = new DateTime("now", new DateTimeZone("America/Sao_Paulo")); ?>
                    <input type="text" class="form-control" name="horaData" value="<?php echo $date->format('d/m/Y H:i'); ?>" style="display: none">

                <div style="text-align: right;">
                    <a href="menu.php" role="button" class="btn btn-primary"> Voltar</a>
                    <button type="submit" class="btn btn-success">Solicitar</buttom>    
                </div>                   
                </div>
            </div>

            </form>
        </div>
    </div>
    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  
    </body>
</html>
