<?php
include 'conexao.php';

$tipo = $_POST['tipo'];

$sql = "INSERT INTO tipo (nomeTipo) 
values ('$tipo')";
$inserir = mysqli_query($conexao, $sql);

?>
<?php 
$serverName = "PCTI-03\SQLEXPRESS";
$options = array(  "UID" => "sa",  "PWD" => "123",  "Database" => "suporte");
$conn = sqlsrv_connect($serverName, $options);
$nomeCategoria = $_POST['categoria'];
if( $conn === false )
     {
     echo "Could not connect.\n";
     die( print_r( sqlsrv_errors(), true));
     }

$categoria= $_POST['tipo'];

$query = "INSERT INTO dbo.tipo
        (idtipo, nomeTipo)
        VALUES ((select max(x.idcategoria) + 1 from dbo.categoria x),'$nomeCategoria')";
                    
$result = sqlsrv_query($conn,$query);

sqlsrv_close($conn);
//echo $query;
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<div class="container" style= "width: 500px; margin-top: 200px">
    <center>
    <h4> Tipo adicionado com sucesso!</h4>
        <a href="adicionarTipo.php" role="button" class="btn btn-primary"> Voltar</a>
    </div>
    </center>
</div>