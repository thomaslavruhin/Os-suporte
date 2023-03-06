<?php
include 'conexao.php';
function getData(){
    $data = array();
    $data[1] =$_POST['idCategoria'];
    $data[2] =$_POST['nomeCategoria'];
        return $data;
}
if(isset($_POST['insert'])){
    $info   = getData();
    $insert = "INSERT INTO dbo.categoria (nomeCategoria)
    VALUES ('$info[1]','$info[2]')";
    $result = odbc_exec($connection, $insert); 

}
//$categoria = $_POST['categoria'];

//$sql = "INSERT INTO categoria (nomeCategoria) values ('$categoria')";
//$stmt = prepare($sql);
//$stmt->execute([$idCategoria, $nomeCategoria]);

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<div class="container" style= "width: 500px; margin-top: 200px">
    <center>
    <h4> Categoria adicionada com sucesso!</h4>
        <a href="adicionarCategoria.php" role="button" class="btn btn-primary"> Voltar</a>
    </div>
    </center>
</div>