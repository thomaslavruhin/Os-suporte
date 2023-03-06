<?php
include 'conexao.php';
include 'script/password.php';

$usuario = $_POST['usuario'];
$senhausuario = $_POST['senha'];

$sql = "SELECT mailUsuario,senhaUsuario FROM usuarios WHERE mailUsuario = '$usuario' AND statusUsuario='Ativo'";
$buscar = mysqli_query($conexao, $sql);

$total = mysqli_num_rows($buscar);
if ($total == 0 ) {
    header('Location: erro.php');
    }
while ($array = mysqli_fetch_array($buscar)){

        $senha = $array['senhaUsuario'].'<br>';
        $senhacodificada = sha1($senhausuario).'<br>';
   if ($total > 0 ) {
        if ($senhacodificada == $senha) {
           header('Location: menu.php');
           
        } else {
            
            header('Location: erroSenha.php');
    
        }
    }
    }
    ?>