<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=0.8 user-scalable=on" />
        <title> Login </title>
    <!-- CSS only -->
    <script src="https://kit.fontawesome.com/a60023a2e4.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> 
    <style type="text/css">
        #tamanhoContainer {width: 600px;
            height:350px;
            -webkit-box-shadow: 0px 0px 41px -4px rgba(0,0,0,0.75);
            -moz-box-shadow: 0px 0px 41px -4px rgba(0,0,0,0.75);
            box-shadow: 0px 0px 41px -4px rgba(0,0,0,0.75);
        }
    </style>
</head>
<body>
    <div class="container" id="tamanhoContainer" style="margin-top: 120px;border-radius: 15px; border: 2px solid #f1f1f1 ">
        <div style="padding: 20px">
            <center>
            <img src="img/brz.jpg" width="125px" height="125px">
            <form action="index1.php" method="post">
                <div class="form-group">
                    <label> Usuário </label>
                    <input type="text" name="usuario" class="form-control" placeholder="Usuário" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label>Senha</label>
                    <input type="password" name="senha" class="form-control" placeholder="Senha" autocomplete="off" required>
                </div>
            <br>
                <div style="text-align: right;">
                    <button type="submit" class="btn btn-sm btn-success">Entrar</button>
                </div>
        </div>
            </center>
            </form>
    </div>
    <div style="margin-top: 10px">
            <center>
            <small>Você não possui cadastro? Clique <a href="cadastroUsuarioEx.php">Aqui</a></small>
            </center>
    </div>

    <p>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>