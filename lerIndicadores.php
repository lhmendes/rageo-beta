<?php
include('conexao.php');

$query     = "SELECT i.descricao, c.valor FROM `cotacao` c, `indicadores` i WHERE c.indicador = i.id and data_base = '2018-12-31'";
$resultado = mysqli_query($conexao, $query);
$qtde      = mysqli_num_rows($resultado);

while($row = $resultado->fetch_object()){
    foreach($row as $key => $col){
       $col_array[$key] = utf8_encode($col);
    }
    $row_array[] =  $col_array;
}
echo json_encode($row_array, JSON_NUMERIC_CHECK);

?>