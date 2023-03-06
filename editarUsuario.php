<?php

include 'conexao.php';

$id = $_GET['id']

?>

<!DOCTYPE html>
<html>
<Head>
<meta charset="utf-8">
    <meta name="viewport" content="initial-scale=0.8 user-scalable=on" />
    <Title>Usuário</Title>
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
    <div class="container" id="tamanhoContainer" style="margin-top: 30px">
    <div style="padding: 10px">
    <div class="mb-3">
        
            <h1>Editar Usuários</h1>
            <br>


            <h3> Informações do Usuário:</h3>
            <form action="atualizarUsuario.php" method="post" style="margin-top: 20px">
                <?php
                    $sql = "SELECT * FROM `usuarios` WHERE idUsuario = $id";
                    $buscar = mysqli_query($conexao, $sql);
                    while ($array = mysqli_fetch_array($buscar)) {
                        
                        $idUsuario = $array ['idUsuario'];
                        $nomeUsuario = $array ['nomeUsuario'];
                        $mailUsuario = $array ['mailUsuario'];
                        $nivelUsuario = $array ['nivelUsuario'];   
                        $statusUsuario = $array ['statusUsuario']; 
                        $senhaUsuario = $array ['senhaUsuario'];                      
                 

                ?>

                <div class="form-group">
                    <label>ID do Usuário:</label>
                    <input type="int" class="form-control" name="id_os" value = "<?php echo $idUsuario ?> " disabled>
                    <input type="int" class="form-control" name="id" value = "<?php echo $id ?> " style="display: none">
                </div> 

                <div class="form-group">
                    <label>Nome do Usuário:</label>
                    <input type="name" class="form-control" name="nomeUsuario" value = "<?php echo $nomeUsuario ?>" required>
                </div>    
                <div class="form-group">
                    <label>Email do Usuário:</label>
                    <input type="text" class="form-control" name="mailUsuario" value = "<?php echo $mailUsuario ?>" required>
                </div>

                <div class="form-group">
                <label> Nível de Acesso</label>
                    <select name="nivelUsuario" class="form-control" ORDER BY DESC required>
                    <option></option> 
                    <option value="3">Usuário</option>   
                    <option value="2">Moderador</option>
                    <option value="1">Administrador</option>            
        </select>
    </div>
                <div class="form-group">
                    <label> Status</label>
                    <select name="statusUsuario" class="form-control" required>
                    <option></option> 
                    <option>Ativo</option>   
                    <option>Inativo</option>     
                    </select>
                </div>
                <div class="form-group">
                    <label>Senha:</label>
                    <input type="password" class="form-control" name="senhaUsuario" >
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
