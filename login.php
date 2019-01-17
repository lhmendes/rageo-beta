<?php
include('conexao.php');

if ( empty($_POST['pUsuario']) || empty($_POST['pSenha'])) {
    header('Location: login.html');
    exit();
    echo "vazio";
}

$usuario = mysqli_real_escape_string($conexao, $_POST['pUsuario']);
$senha   = mysqli_real_escape_string($conexao, $_POST['pSenha']);

$query   = "select foto from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";
$resultado = mysqli_query($conexao, $query);
//$linha     = mysqli_fetch_row($result);
$qtde      = mysqli_num_rows($resultado);

if($qtde == 1){
    while ($row=mysqli_fetch_row($resultado)){
        $foto = $row[0];
    }    
    session_start();
    $_SESSION['usuario'] = $usuario;
    $_SESSION['foto']    = $foto;

    header('Location: dashboard.php');
    exit();
}else{
    header('Location: login.html');
    exit();
}
?>