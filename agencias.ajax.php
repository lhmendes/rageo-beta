<?php
    include_once('conexao.php');
    header( 'Cache-Control: no-cache' );
	header( 'Content-type: text/html; charset="iso-8859-1"', true );

	$cod_banco   = mysqli_real_escape_string($conexao, $_GET['banco'] );
	$cod_agencia = mysqli_real_escape_string($conexao, $_GET['agencia'] );

	$sql = "SELECT nome
			FROM   agencias_bancarias
			WHERE  banco='$cod_banco'
            and    codigo='$cod_agencia'
			ORDER BY nome";
    
	$res  = mysqli_query($conexao, $sql );

	while ( $row = mysqli_fetch_array( $res ) ) {
        echo $row['0'];
	}
?>

