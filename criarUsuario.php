<?php
include('conexao.php');

if ( empty($_POST['pNovoUsuario']) || empty($_POST['pNovaSenha'])) {
    header('Location: login.html');
    exit();
    echo "vazio";
}

$usuario = mysqli_real_escape_string($conexao, $_POST['pNovoUsuario']);
$senha   = mysqli_real_escape_string($conexao, $_POST['pNovaSenha']);
$email   = mysqli_real_escape_string($conexao, $_POST['pNovoEmail']);

$query   = "insert into usuario (usuario, senha, email) values ('{$usuario}', md5('{$senha}'), '{$email}')";
$resultado = mysqli_query($conexao, $query);

if($resultado == 1){
    session_start();
    $_SESSION['usuario'] = $usuario;
    $_SESSION['foto']    = 'images/img.jpg';
    header('Location: dashboard.php');
    exit();
}else{
    header('Location: login.html');
    echo "0";
    exit();
}

?>