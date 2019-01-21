<?php
    include_once('conexao.php');
    header( 'Cache-Control: no-cache' );
	header( 'Content-type: text/html; charset="iso-8859-1"', true );

	$cod_estados = mysqli_real_escape_string($conexao, $_GET['cod_estado'] );
	$cidades = array();

	$sql = "SELECT codigo_ibge, nome_municipio
			FROM municipios
			WHERE uf='$cod_estados'
			ORDER BY nome_municipio";
    
	$res  = mysqli_query($conexao, $sql );

    echo  "<option value=\"\">Selecione uma cidade</option>";

	while ( $row = mysqli_fetch_array( $res ) ) {
        echo "<option value=\"".$row['0']."\"> ".$row['1']."</option>";
	}
?>

