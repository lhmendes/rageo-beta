<?php
include('conexao.php');
/*
if ( empty($_GET['pNovoUsuario']) || empty($_GET['pNovaSenha'])) {
    header('Location: login.html');
    exit();
    echo "vazio";
}
*/
$cod_cliente     =1;
$nome            = mysqli_real_escape_string($conexao, $_GET['nome']);
$cpf_cnpj        = mysqli_real_escape_string($conexao, $_GET['cpf_cnpj']);
$rg              = mysqli_real_escape_string($conexao, $_GET['rg']);
$rg_uf           = mysqli_real_escape_string($conexao, $_GET['rg_uf']);
$rg_emissao      = mysqli_real_escape_string($conexao, $_GET['rg_emissao']);
$data_nascimento = mysqli_real_escape_string($conexao, $_GET['data_nascimento']);
$sexo            = mysqli_real_escape_string($conexao, $_GET['sexo']);
$nacionalidade   = mysqli_real_escape_string($conexao, $_GET['nacionalidade']);
$natural_de      = mysqli_real_escape_string($conexao, $_GET['natural_de']);
$uf_nascimento   = mysqli_real_escape_string($conexao, $_GET['uf_nascimento']);
$estado_civil    = mysqli_real_escape_string($conexao, $_GET['estado_civil']);
$grau_instrucao  = mysqli_real_escape_string($conexao, $_GET['grau_instrucao']);
$tel_celular     = mysqli_real_escape_string($conexao, $_GET['tel_celular']);
$tel_residencial = mysqli_real_escape_string($conexao, $_GET['tel_residencial']);
$email           = "henriquedba@gmail.com"; //mysqli_real_escape_string($conexao, $_GET['email']);
$data_nascimento = str_replace('/','-',$data_nascimento);
$dt_nascimento   =  new DateTime($data_nascimento);
$dt_nascimento = $dt_nascimento->format('Y-m-d H:i:s');

$comando   = "INSERT INTO clientes(nome, cpf_cnpj, rg, rg_uf, rg_emissao, data_nascimento, sexo, nacionalidade, natural_de, uf_nascimento, estado_civil, grau_instrucao, tel_residencial, tel_celular, email) 
VALUES ('{$nome}','{$cpf_cnpj}','{$rg}','{$rg_uf}','{$rg_emissao}','{$dt_nascimento}','{$sexo}','{$nacionalidade}','{$natural_de}','{$uf_nascimento}','{$estado_civil}','{$grau_instrucao}','{$tel_celular}','{$tel_residencial}','{$email}')";

$resultado = mysqli_query($conexao, $comando);
echo $comando;
echo "<br/>";
echo $resultado;
echo "<br/>";


$cep         = "04142081"; //mysqli_real_escape_string($conexao, $_GET['cep']);
$endereco    = mysqli_real_escape_string($conexao, $_GET['endereco']);
$numero      = mysqli_real_escape_string($conexao, $_GET['endereco_numero']);
$complemento = mysqli_real_escape_string($conexao, $_GET['endereco_complemento']);
$bairro      = mysqli_real_escape_string($conexao, $_GET['endereco_bairro']);
$cidade      = mysqli_real_escape_string($conexao, $_GET['endereco_cidade']);
$endereco_uf = mysqli_real_escape_string($conexao, $_GET['endereco_uf']);

$cmd_enderecos  = "
INSERT INTO clientes_enderecos(cod_cliente, tipo, sequencia, cep, endereco, numero, complemento, bairro, cidade, uf) VALUES ({$cod_cliente}, 1, 1,'{$cep}','{$endereco}','{$numero}','{$complemento}','{$bairro}','{$cidade}','{$endereco_uf}')";    

$resultado1 = mysqli_query($conexao, $cmd_enderecos);
echo $cmd_enderecos;
echo "<br/>";
echo $resultado1;
echo "<br/>";




$nome_empresa  = mysqli_real_escape_string($conexao, $_GET['nome_empresa']);
$profissao     = mysqli_real_escape_string($conexao, $_GET['profissao']);
$salario       = mysqli_real_escape_string($conexao, $_GET['salario']);
$tempo_servico = mysqli_real_escape_string($conexao, $_GET['tempo_servico']);
$tel_comercial = mysqli_real_escape_string($conexao, $_GET['tel_comercial']);
$ramal         = mysqli_real_escape_string($conexao, $_GET['ramal']);

$cmd_dados_prof = "
INSERT INTO clientes_dados_prof(cod_cliente, nome_empresa, profissao, salario, tempo_servico, telefone_coml, ramal) VALUES ({$cod_cliente},'{$nome_empresa}','{$profissao}','{$salario}','{$tempo_servico}','{$tel_comercial}','{$ramal}')";


$resultado2 = mysqli_query($conexao, $cmd_dados_prof);
echo $cmd_dados_prof;
echo "<br/>";
echo $resultado2;
echo "<br/>";
echo "<br/>";

$banco     = mysqli_real_escape_string($conexao, $_GET['banco']);
$agencia   = mysqli_real_escape_string($conexao, $_GET['agencia']);
$conta     = mysqli_real_escape_string($conexao, $_GET['conta']);
$dig_conta = mysqli_real_escape_string($conexao, $_GET['dig_conta']);

$cmd_dados_banc = "    
INSERT INTO cliente_dados_bancarios(cod_cliente, tipo, sequencia, banco, agencia, conta, dig_conta) VALUES ({$cod_cliente},1,1,'{$banco}','{$agencia}','{$conta}','{$dig_conta}')";
    
$resultado3 = mysqli_query($conexao, $cmd_dados_banc);
echo $cmd_dados_banc;
echo "<br/>";
echo $resultado3;
echo "<br/>";


//$resultado = mysqli_query($conexao, $comando);
//echo $resultado;

if($resultado == 1){
    session_start();
//    $_SESSION['usuario'] = $usuario;
//    $_SESSION['foto']    = 'images/img.jpg';
//    header('Location: dashboard.php');
    echo "1";
    exit();
}else{
//    header('Location: login.html');
    echo "0";
    exit();
}

?>