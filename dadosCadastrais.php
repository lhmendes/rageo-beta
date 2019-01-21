<?php
    include_once('conexao.php');

//    $query   = "select codigo, nome, banco, nome_banco from agencias_bancarias where banco=237 and codigo='2847' ";
    $query     = "SELECT `id`, `nome`, `cpf_cnpj`, `rg`, `rg_uf`, `rg_emissao`, DATE_FORMAT(data_nascimento, '%d/%m/%Y') as data_nascimento, `sexo`, `nacionalidade`, `natural_de`, `uf_nascimento`, `estado_civil`, `grau_instrucao` FROM `clientes` WHERE id= 1";
    $resultado = mysqli_query($conexao, $query);
    //$linha     = mysqli_fetch_row($result);
    $qtde      = mysqli_num_rows($resultado);
//    print($qtde);
//    $registro = mysqli_fetch_array(MYSQLI_BOTH);


    while ($row = mysqli_fetch_array($resultado, MYSQLI_BOTH)) {
        $resultset[] = $row;
    }

foreach ($resultset as $result){
  //print $result['codigo'];
  echo("<script>console.log('PHP: ". $result['rg'] ."');</script>");
};

?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php 
        session_start();
        if((!isset ($_SESSION['usuario']) == true) ){
           unset($_SESSION['usuario']);
           header('location:login.html');
        }
        
        $logado = ucwords($_SESSION['usuario']);
        $foto   = isset($_SESSION['foto']) ? $_SESSION['foto'] : 'images/user.png';
    ?>
    <title>RAGEO | </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
      
    <script>
        function formatar(mascara, documento){
          var i = documento.value.length;
          var saida = mascara.substring(0,1);
          var texto = mascara.substring(i)

          if (texto.substring(0,1) != saida){
                    documento.value += texto.substring(0,1);
          }
        }
        
        function MascaraRG(rg){
        if((rg)==false){
                event.returnValue = false;
        }       
        return formataCampo(rg, '00.000.000-0', event);
        }
    </script>

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>RAGEO</span></a>
            </div>
            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo "$foto";?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
              <span>Bem-vindo,</span>
                <h2><?php echo "$logado";?></h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->
            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="dashboard.php">Painel</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Meu Cadastro<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="dadosCadastrais.php">Dados Cadastrais</a></li>
                      <li><a href="form_upload.php">Documentações</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-money"></i> Empréstimos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="meusEmprestimos.php">Meus empréstimos</a></li>
                      <li><a href="simularEmprestimo.php">Simular empréstimos</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Investimentos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="plain_page.php">Meus investimentos</a></li>
					  <li><a href="plain_page.php">Investir</a></li>
                      <li><a href="perfil_investidor.php">Perfil de Investidor</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i>Serviços <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="seguros.php">Seguros</a></li>
					  <li><a href="plain_page.php">Cobrança</a></li>
					</ul>
                  </li>				  
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
			
            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo "$foto";?>" alt=""><?php echo "$logado";?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Perfil</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">70%</span>
                        <span>Configurações</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Ajuda</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Sair</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>Luiz Henrique</span>
                          <span class="time">3 mins atrás</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>Luiz Henrique</span>
                          <span class="time">3 mins atrás</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>Luiz Henrique</span>
                          <span class="time">3 mins atrás</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>Luiz Henrique</span>
                          <span class="time">3 mins atrás</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>Visualizar todos os Alertas</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Meu Cadastro</h3>
              </div>
            </div>

            <div class="clearfix"></div>

<form id="formCadastro" action="cadastrarCliente.php" data-parsley-validate class="form-horizontal form-label-left" method="GET">
			 <div class="row" style="background-color:red">
                 
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Dados Pessoais</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br/>
                 <!--   <form id="formCadastro" action="cadastrarCliente.php" data-parsley-validate class="form-horizontal form-label-left" method="GET"> -->
                        
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancelar</button>
						  <button class="btn btn-primary" type="reset">Limpar</button>
                          <button type="submit" class="btn btn-success">Salvar</button>
                        </div>
                      </div>
                        
                        
                        
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nome">Nome Completo<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nome" name="nome" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $result['nome']?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cpf   ">CPF<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="cpf_cnpj" name="cpf_cnpj" required="required" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" class="form-control col-md-7 col-xs-12" value="<?php echo $result['cpf_cnpj']?>">
                        </div>
                      </div>					  

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nascto">Data de Nascimento<span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                          <input type="text" id="data_nascimento" name="data_nascimento"required="required" class="form-control col-md-7 col-xs-12" OnKeyPress="formatar('##/##/##', this)" value="<?php echo $result['data_nascimento']?>">
                        </div>

                        <label class="control-label col-md-1 col-sm-1 col-xs-12">Sexo</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="sexo" class="btn-group" >
                            <label class="btn btn-default">
                              <input type="radio" name="sexo" value="M" <?php if($result['sexo']=="M") echo 'checked'; ?> > &nbsp; Masculino &nbsp;
                            </label>
                            <label class="btn btn-default">
                              <input type="radio" name="sexo" value="F" <?php if($result['sexo']=="F") echo 'checked'; ?> > Feminino
                            </label>
                          </div>
                        </div>
                          
                      </div>	

                      <div class="form-group">
                      </div>					  
					  
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="rg">RG<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="rg" name="rg" required="required" class="form-control col-md-7 col-xs-12" OnKeyPress="formatar('#.###.###-#', this)" value="<?php echo $result['rg']?>">
                          <input type="hidden" name="rg_uf">
                          <input type="hidden" name="rg_emissao">
                            
                        </div>
                      </div>					  
					  
					  
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Estado Civil<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select name="estado_civil" id="estado_civil" required="required" class="form-control col-md-7 col-xs-12">>
                                                                
                              <option value="">-- Selecione o estado civil -- </option>
                              <option <?php if($result['estado_civil']=="1") echo 'selected="selected"'; ?> value="1">Solteiro</option>
                              <option <?php if($result['estado_civil']=="2") echo 'selected="selected"'; ?> value="2">Casado</option>
                              <option <?php if($result['estado_civil']=="3") echo 'selected="selected"'; ?>  value="3">Divorciado</option>
                              <option <?php if($result['estado_civil']=="4") echo 'selected="selected"'; ?> value="4">Viúvo</option>
                            </select>
                        </div>
                      </div>					  

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="uf">UF<span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                          <select id="uf_nascimento" name="uf_nascimento" required="required" class="form-control col-md-1 col-xs-12">
                                <option <?php if($result['uf_nascimento']=="") echo 'selected="selected"'; ?> 
                                        value="">Selecione a UF</option> 
                                <option <?php if($result['uf_nascimento']=="AC") echo 'selected="selected"'; ?> 
                                        value="AC">Acre</option>
                                <option <?php if($result['uf_nascimento']=="AL") echo 'selected="selected"'; ?> 
                                        value="AL">Alagoas</option>
                                <option <?php if($result['uf_nascimento']=="AP") echo 'selected="selected"'; ?> 
                                        value="AP">Amapá</option>
                                <option <?php if($result['uf_nascimento']=="AM") echo 'selected="selected"'; ?> 
                                        value="AM">Amazonas</option>
                                <option <?php if($result['uf_nascimento']=="BA") echo 'selected="selected"'; ?> 
                                        value="BA">Bahia</option>
                                <option <?php if($result['uf_nascimento']=="CE") echo 'selected="selected"'; ?> 
                                        value="CE">Ceará</option>
                                <option <?php if($result['uf_nascimento']=="DF") echo 'selected="selected"'; ?> 
                                        value="DF">Distrito Federal</option>
                                <option <?php if($result['uf_nascimento']=="ES") echo 'selected="selected"'; ?> 
                                        value="ES">Espírito Santo</option>
                                <option <?php if($result['uf_nascimento']=="GO") echo 'selected="selected"'; ?> 
                                        value="GO">Goiás</option>
                                <option <?php if($result['uf_nascimento']=="MA") echo 'selected="selected"'; ?> 
                                        value="MA">Maranhão</option>
                                <option <?php if($result['uf_nascimento']=="MT") echo 'selected="selected"'; ?> 
                                        value="MT">Mato Grosso</option>
                                <option <?php if($result['uf_nascimento']=="MS") echo 'selected="selected"'; ?> 
                                        value="MS">Mato Grosso do Sul</option>
                                <option <?php if($result['uf_nascimento']=="MG") echo 'selected="selected"'; ?> 
                                        value="MG">Minas Gerais</option>
                                <option <?php if($result['uf_nascimento']=="PA") echo 'selected="selected"'; ?> 
                                        value="PA">Pará</option>
                                <option <?php if($result['uf_nascimento']=="PB") echo 'selected="selected"'; ?> 
                                        value="PB">Paraíba</option>
                                <option <?php if($result['uf_nascimento']=="PR") echo 'selected="selected"'; ?> 
                                        value="PR">Paraná</option>
                                <option <?php if($result['uf_nascimento']=="PE") echo 'selected="selected"'; ?> 
                                        value="PE">Pernambuco</option>
                                <option <?php if($result['uf_nascimento']=="PI") echo 'selected="selected"'; ?> 
                                        value="PI">Piauí</option>
                                <option <?php if($result['uf_nascimento']=="RJ") echo 'selected="selected"'; ?> 
                                        value="RJ">Rio de Janeiro</option>
                                <option <?php if($result['uf_nascimento']=="RN") echo 'selected="selected"'; ?> 
                                        value="RN">Rio Grande do Norte</option>
                                <option <?php if($result['uf_nascimento']=="RS") echo 'selected="selected"'; ?> 
                                        value="RS">Rio Grande do Sul</option>
                                <option <?php if($result['uf_nascimento']=="RO") echo 'selected="selected"'; ?> 
                                        value="RO">Rondônia</option>
                                <option <?php if($result['uf_nascimento']=="RR") echo 'selected="selected"'; ?> 
                                        value="RR">Roraima</option>
                                <option <?php if($result['uf_nascimento']=="SC") echo 'selected="selected"'; ?> 
                                        value="SC">Santa Catarina</option>
                                <option <?php if($result['uf_nascimento']=="SP") echo 'selected="selected"'; ?> 
                                        value="SP">São Paulo</option>
                                <option <?php if($result['uf_nascimento']=="SE") echo 'selected="selected"'; ?> 
                                        value="SE">Sergipe</option>
                                <option <?php if($result['uf_nascimento']=="TO") echo 'selected="selected"'; ?> 
                                        value="TO">Tocantins</option>
                                <option <?php if($result['uf_nascimento']=="IM") echo 'selected="selected"'; ?> 
                                        value="IM">Estrangeiro</option>
                            </select>                            
                        </div>
                        <label class="control-label col-md-1 col-sm-2 col-xs-12" for="natural">Naturalidade<span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <select name="natural_de" id="natural_de" class="form-control col-md-3 col-xs-12">
                              <option value="">-- Selecione uma cidade --</option>
                          </select>                
                        </div>                          
                      </div>					  
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nacionalidade<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nacionalidade" name="nacionalidade" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $result['nacionalidade']?>">
                        </div>
                      </div>						  

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">CEP<span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <input type="text" id="cep" name="cep" required="required" class="form-control col-md-7 col-xs-12" value="04142081">
                        </div>
                          
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <button type="button" class="btn btn-primary" name="btnBuscaCEP" id="btnBuscaCEP"> Buscar CEP</button>
                        </div>
                          
                      </div>					  
					  
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Endereço<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="endereco" name="endereco" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					  
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Número<span class="required">*</span>
                        </label>
                        <div class="col-md-1 col-sm-1 col-xs-12">
                          <input type="text" id="endereco_numero" name="endereco_numero" required="required" class="form-control col-md-7 col-xs-12" value="710">
                        </div>
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Complemento<span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <input type="text" id="endereco_complemento" name="endereco_complemento" class="form-control col-md-7 col-xs-12">
                        </div>                          
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Bairro<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="endereco_bairro" name="endereco_bairro"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                        
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">UF<span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <select id="endereco_uf" name="endereco_uf" required="required" class="form-control col-md-2 col-xs-12">
                                <option value="">Selecione a UF</option> 
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                                <option value="IM">Estrangeiro</option>
                            </select>                            
                        </div>
                        <label class="control-label col-md-1 col-sm-1 col-xs-12">Cidade<span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <select name="endereco_cidade" id="endereco_cidade" required="required" class="form-control col-md-3 col-xs-12">
                                <option value="">-- Selecione uma cidade --</option>
                          </select>                
                        </div>                          
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Telefone Celular<span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                          <input type="text" id="tel_celular" name="tel_celular" required="required"  class="form-control col-md-3 col-xs-12" value="11">
                        </div>
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Telefone Residencial<span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                          <input type="text" id="tel_residencial" name="tel_residencial" required="required" class="form-control col-md-7 col-xs-12" value="11">
                            <input type="hidden" name="grau_instrucao">
                                   
                        </div>
                          
                      </div>
					  
                      <div class="ln_solid"></div>

                 <!--   </form> -->
                  </div>
                </div>
              </div>
            </div>
			


			<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Dados Profissionais</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
<!--                    <form id="formDadosProfissionais" data-parsley-validate class="form-horizontal form-label-left"> -->

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Grau de Instrução<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="grau_instrucao" name="grau_instrucao" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					  
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Profissão<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="profissao" name="profissao" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>					  

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Empresa Onde Trabalha<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nome_empresa" name="nome_empresa" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>	

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Salário<span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                          <input type="number" id="salario" name="salario" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                          
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Tempo Serviço<span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                          <input type="text" id="tempo_servico" name="tempo_servico" required="required" class="form-control col-md-7 col-xs-12">
                        </div>                          
                      </div>					  
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Telefone Comercial<span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <input type="text" id="tel_comercial" name="tel_comercial" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Ramal<span class="required">*</span>
                        </label>
                        <div class="col-md-1 col-sm-1 col-xs-12">
                          <input type="text" id="ramal" name="ramal" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                          
                      </div>


                      <div class="ln_solid"></div>


<!--                    </form> -->
                  </div>
                </div>
              </div>
            </div>			

			<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Dados Bancários</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
<!--                    <form id="formDadosBancarios" data-parsley-validate class="form-horizontal form-label-left"> -->

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="banco">Banco<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" maxlength="3" id="banco" name="banco" required="required" class="col-md-2 col-xs-4" OnKeyPress="formatar('000', this)" >
                          <input type="text" id="descBanco" class="col-md-10 col-xs-8" readonly disabled>
                        </div>
                      </div>
					  
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="agencia">Agência<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" maxlength="4" id="agencia" name="agencia" required="required" class="col-md-2 col-xs-4" OnKeyPress="formatar('0000', this)" >
                          <input type="text" id="descAgencia" class="col-md-10 col-xs-8" readonly disabled>                      
                        </div>
                      </div>					  

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="conta">Conta<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="conta" name="conta" required="required"  class="col-md-3 col-sm-3 col-xs-3">
                          <input type="text" id="dig_conta" name="dig_conta" required="required" maxlength="2" class="col-md-1 col-sm-1 col-xs-1">
                        </div>
                      </div>	
                      <div class="ln_solid"></div>


<!--                    </form>  -->
                  </div>
                </div>
              </div>
            </div>			

</form>
			
<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                  <div class="x_content">
                    
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" value=""> Aceito receber contato via SMS ou WhatsApp
                            </label>
                          </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>				
			
			
<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                  <div class="x_content">
                    
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancelar</button>
						  <button class="btn btn-primary" type="reset">Limpar</button>
                          <button type="submit" class="btn btn-success">Salvar</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>		
			

          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
          RAGEO - Pessoas ajudando pessoas - &copy; Copyright 2019
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
      
    <script type="text/javascript">
        $(function(){
            $('#uf_nascimento').change(function(){
                if( $(this).val() ) {
                    $.get('cidades.ajax.php?cod_estado=' + $(this).val(), function(data){
                        
                        $('#natural_de').html(data).show();
                    });
                } else {
                    $('#natural_de').html('<option value="">– Escolha um estado –</option>');
                }
            });
        });
    </script>        
    <script type="text/javascript">
        $(function(){
            $('#endereco_uf').change(function(){
                if( $(this).val() ) {
                    $.get('cidades.ajax.php?cod_estado=' + $(this).val(), function(data){
                        $('#endereco_cidade').html(data).show();
                    });
                } else {
                    $('#endereco_cidade').html('<option value="">– Escolha um estado –</option>');
                }
            });
        });
    </script>        
      
   <script type="text/javascript" >
        $(document).ready(function() {
            $("#natural_de > [value=" + <?php $result['natural_de'] ?> + "]").attr("selected", "true");            
            
            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
                $("#ibge").val("");
            }


            function pesquisaCEP(valor) {

                //Nova variável "cep" somente com dígitos.
                var cep = valor.val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {
                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {
                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#endereco").val("...");
                        $("#endereco_bairro").val("...");
                        $("#endereco_cidade").val("...");
                        $("#endereco_uf").val("...");
                        //$("#ibge").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {
                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#endereco").val(dados.logradouro);
                                $("#endereco_bairro").val(dados.bairro);
                                $("#endereco_uf").val(dados.uf);

                                $.get('cidades.ajax.php?cod_estado=' + $("#endereco_uf").val(), function(data){
                                    $('#endereco_cidade').html(data).show();
                                    $("#endereco_cidade").val(dados.ibge).change();
                                });                                
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            }            
            //Quando o campo cep perde o foco.
            //$("#cep").blur(function(){
        //       pesquisaCEP($(this));
        //      }
        //    );
            
            $("#btnBuscaCEP").click(function(){
//                console.log($('#cep'));
               pesquisaCEP($('#cep'));
              }
            );
        });

       
       $("#banco").blur(function(){
           
           $.get('bancos.ajax.php?banco=' + $("#banco").val(), function(data){
           $('#descBanco').val(data);
        });
       });

      $("#agencia").blur(function(){
          console.log($("#banco").val() + '&agencia=' + $("#agencia").val());
           $.get('agencias.ajax.php?banco=' + $("#banco").val() + '&agencia=' + $("#agencia").val(), function(data){
           $('#descAgencia').val(data);
        });
       });

       
    </script>      
      
  </body>
</html>
