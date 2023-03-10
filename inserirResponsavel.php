<?php 
$serverName = "PCTI-03\SQLEXPRESS";
$options = array(  "UID" => "sa",  "PWD" => "123",  "Database" => "suporte");
$conn = sqlsrv_connect($serverName, $options);
$nomeResponsavel = $_POST['responsavel'];
if( $conn === false )
     {
     echo "Could not connect.\n";
     die( print_r( sqlsrv_errors(), true));
     }

$categoria= $_POST['responsavel'];

$query = "INSERT INTO dbo.responsavel
        (idResponsavel, nomeResponsavel)
        VALUES ((select max(x.idResponsavel) + 1 from dbo.Responsavel x),'$nomeResponsavel')";
                    
$result = sqlsrv_query($conn,$query);

sqlsrv_close($conn);
//echo $query;
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<div class="container" style= "width: 500px; margin-top: 200px">
    <center>
    <h4> Responsável adicionado com sucesso!</h4>
        <a href="adicionarResponsavel.php" role="button" class="btn btn-primary"> Voltar</a>
    </div>
    </center>
</div>