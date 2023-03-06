<!DOCTYPE html>
<html>
<Head>
<meta charset="utf-8">
    <meta name="viewport" content="initial-scale=0.8 user-scalable=on" />
    <Title>Adicionar Tipo</Title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
    crossorigin="anonymous">
    <style type="text/css">
        #tamanhoContainer {width: 600px;
            -webkit-box-shadow: 0px 0px 41px -4px rgba(0,0,0,0.75);
            -moz-box-shadow: 0px 0px 41px -4px rgba(0,0,0,0.75);
            box-shadow: 0px 0px 41px -4px rgba(0,0,0,0.75);
        }
    </style>
</Head>
    <body>
    <?php require_once "header.php" ?>
        <div style="margin-top: 30px">
        <div style="padding: 10px">
    <div class="mb-3">    
        <center>
                <h2>Cadastro de Tipo</h2>
                <br>
                <form action="inserirTipo.php" method="post">
                    <h5>Tipo: </h5>
                    <div class="form-group">
                        <input type="text" name="tipo" placeholder="Insira o nome do Tipo." autocomplete="off" required>
                        <div style ="text-align: right">
                        <br>
                        <div style="text-align: right;">
                        <a href="listarTipo.php" role="button" class="btn btn-primary"> Voltar</a>
                        <button type="submit" class="btn btn-success">Adicionar</buttom>    
                </div>
                        </div>
                    </div>    
                </form>
            </div> 
        </div> 
        </center>
        <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    </body>    
</html>
