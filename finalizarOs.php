<?php

include 'conexao.php';

$id = $_POST['id'];
$responsavel = $_POST['responsavel'];
$solucao = $_POST['solucao'];
$statusOs = 'Finalizado';

$sql = "UPDATE `os_suporte` SET `solucao`='$solucao', `responsavel`='$responsavel',`statusOs`='$statusOs' WHERE id_os = $id";

$atualizar = mysqli_query($conexao,$sql);

header("Location: listarOs.php");
?>

