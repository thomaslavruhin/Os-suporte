<?php

include 'conexao.php';

$id = $_GET['id'];



    $update = "UPDATE os_suporte SET statusOs = 'Indeferido' WHERE id_os = $id";
    $atualizacao = mysqli_query($conexao, $update);


    header('Location: listarOs.php');

?>