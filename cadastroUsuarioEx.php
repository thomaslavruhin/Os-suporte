<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=0.8 user-scalable=on" />
        <title> Cadastro Usuário Externo</title>
    <!-- CSS only -->
    <script src="https://kit.fontawesome.com/a60023a2e4.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> 
    <style type="text/css">
        #tamanhoContainer {width: 600px;
           /* height:700px;*/
            -webkit-box-shadow: 0px 0px 41px -4px rgba(0,0,0,0.75);
            -moz-box-shadow: 0px 0px 41px -4px rgba(0,0,0,0.75);
            box-shadow: 0px 0px 41px -4px rgba(0,0,0,0.75);
        }
    </style>
</head>
<body>
<?php require_once "header.php" ?>
<div class="container" id="tamanhoContainer" style="margin-top: 20px ">
<center>
<img src="img/brz.jpg" width="125px" height="125px" style="padding: 20px">
<h4> Cadastro de Usuário Externo</h4>
</center>
<form action="inserirUsuarioExterno.php" method="post">
    <div class="form-group">
        <label> Nome: </label>
        <input type="text" name="nomeUsuario" class="form-control" placeholder="Nome Completo" autocomplete="off" required>
    </div>
    <div class="form-group">
        <label> Email: </label>
        <input type="email" name="mailUsuario" class="form-control" placeholder="Email do usuário" autocomplete="off" required>
    </div>
    <div class="form-group">
        <label> Senha: </label>
    <input id="txtSenha" type="password" name="senhaUsuario" class="form-control" placeholder="Senha" autocomplete="off" required>
    </div>
    <div class="form-group">
        <label> Repetir Senha: </label>
        <input type="password" name="nomeUsuario2" class="form-control" placeholder="Repetir senha" autocomplete="off" required oninput="validaSenha(this)">
        <small> Precisa ser igual a senha digitada acima!</small>
    </div>
    <br>
    <div style="text-align: right;">
                    <a href="index.php" role="button" class="btn btn-primary"> Voltar</a>
                    <button type="submit" class="btn btn-success">Cadastrar</buttom>  
    </div>
</form>
<br>

    
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  
  <script>
function validaSenha (input){ 
	if (input.value != document.getElementById('txtSenha').value) {
    input.setCustomValidity('Repita a senha corretamente');
  } else {
    input.setCustomValidity('');
  }
} 
</script>


</body>
</html>