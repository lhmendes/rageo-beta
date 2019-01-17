<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
    <!-- bootstrap-wysiwyg -->
    <link href="vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Ion.RangeSlider -->
    <link href="vendors/normalize-css/normalize.css" rel="stylesheet">
    <link href="vendors/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
      
    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-money"></i> <span>RAGEO</span></a>
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
            <br/>
            <!-- sidebar menu -->
            <?php include_once('menu_lateral.php'); ?>
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
                        <span><span>Luiz Henrique</span><span class="time">3 mins atrás</span></span>
                        <span class="message">Film festivals used to be ...</span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span><span>Luiz Henrique</span><span class="time">3 mins atrás</span></span>
                        <span class="message">Film festivals used to be ...</span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span><span>Luiz Henrique</span><span class="time">3 mins atrás</span></span>
                        <span class="message">Film festivals used to be ..</span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span><span>Luiz Henrique</span><span class="time">3 mins atrás</span></span>
                        <span class="message">Film festivals used to be ..</span>
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
                <div class="title_left"><h3>Simulador de investimentos</h3></div>
                <div class="clearfix"></div>
                <div class="row">

                  
                    
                    <div class="col-md-5 col-sm-5 col-xs-5">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Dados do Empréstimo</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                
                                <div class="col-md-12 center-margin">
                                    <form class="form-horizontal form-label-left">
                                        <div class="form-group">
                                        <label>Valor do Empréstimo <span class="required">*</span></label>
                                        <input type="text" class="form-control" name="my_valor" placeholder="Valor do Empréstimo" style="border-style:none;font-size:36px;text-align:center;outline: none;">
                                        <input type="text" class="js-range-slider" name="my_range" value=""
                                            data-type="double"
                                            data-min="0"
                                            data-max="1000"
                                            data-from="0"
                                            data-to="500"
                                            data-grid="true"
                                        />

                                        </div>
                                        <div class="form-group">
                                          <label>Dia de Vencimento </label>
                                          <div class="radio">
                                            <label><input type="radio" class="flat" name="iCheck">  4 </label>
                                            <label><input type="radio" class="flat" name="iCheck"> 12 </label>
                                            <label><input type="radio" class="flat" name="iCheck"> 18 </label>
                                            <label><input type="radio" class="flat" name="iCheck"> 22 </label>
                                            <label><input type="radio" class="flat" name="iCheck"> 26 </label>
                                          </div>                                            
                                        </div>
                                        <div class="form-group">
                                        <label>Date Of Birth <span class="required">*</span></label>
                                            <div class="col-md-5 col-sm-5 col-xs-5">
                                              <input id="birthday2" class="form-control" required="required" type="text">X  
                                            </div>
                                            <div class="col-md-5 col-sm-5 col-xs-5">
                                              <input id="birthday2" class="form-control" required="required" type="text">X  
                                            </div>
                                            
                                        </div>    
                                        
                                    </form>
                                </div>  
                                
                                
                        <form class="form-horizontal form-label-left">


                            

                            
                        </form>
                                
                                
                                
                                
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-7 col-sm-7 col-xs-7">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Motivo</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                
                                
                          <div class="x_panel">
                            <div class="x_content">
                              <div id="alerts"></div>
                              <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one">
                                <div class="btn-group">
                                  <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
                                  <ul class="dropdown-menu">
                                  </ul>
                                </div>
                                <div class="btn-group">
                                  <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                                  <ul class="dropdown-menu">
                                    <li>
                                      <a data-edit="fontSize 5">
                                        <p style="font-size:17px">Huge</p>
                                      </a>
                                    </li>
                                    <li>
                                      <a data-edit="fontSize 3">
                                        <p style="font-size:14px">Normal</p>
                                      </a>
                                    </li>
                                    <li>
                                      <a data-edit="fontSize 1">
                                        <p style="font-size:11px">Small</p>
                                      </a>
                                    </li>
                                  </ul>
                                </div>

                                <div class="btn-group">
                                  <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                                  <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                                  <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
                                  <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
                                </div>

                                <div class="btn-group">
                                  <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
                                  <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
                                  <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
                                  <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
                                </div>

                                <div class="btn-group">
                                  <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                                  <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
                                  <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                                  <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
                                </div>

                                <div class="btn-group">
                                  <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                                  <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
                                </div>
                              </div>

                              <div id="editor-one" class="editor-wrapper"></div>

                              <textarea name="descr" id="descr" style="display:none;"></textarea>
                            </div>
                          </div>                                
                                
                                
                                
                                
                                
                                
                                
                                
                            </div>
                        </div>
                    </div>
                
                
                
                
                
                
                </div>
            </div>
            </div>
          </div> 

          
          
          
          
        <!-- footer content -->
        <footer>
          <div class="pull-right">RAGEO - Pessoas ajudando pessoas - &copy; Copyright 2019</div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
        </div>
        <!-- page content -->   
      </div>

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- jQuery Smart Wizard -->
    <script src="vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- Ion.RangeSlider -->
    <script src="vendors/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
    <script src="vendors/moment/min/moment.min.js"></script>

    <!-- bootstrap-wysiwyg -->
    <script src="vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="vendors/google-code-prettify/src/prettify.js"></script>
      
      
    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
      
      <script>
     $(".js-range-slider").ionRangeSlider({
        onStart: function (data) {
            // Called right after range slider instance initialised
            $('input[name=my_valor]').val(data.to);
    
/*
            console.log(data.input);        // jQuery-link to input
            console.log(data.slider);       // jQuery-link to range sliders container
            console.log(data.min);          // MIN value
            console.log(data.max);          // MAX values
            console.log(data.from);         // FROM value
            console.log(data.from_percent); // FROM value in percent
            console.log(data.from_value);   // FROM index in values array (if used)
            console.log(data.to);           // TO value
            console.log(data.to_percent);   // TO value in percent
            console.log(data.to_value);     // TO index in values array (if used)
            console.log(data.min_pretty);   // MIN prettified (if used)
            console.log(data.max_pretty);   // MAX prettified (if used)
            console.log(data.from_pretty);  // FROM prettified (if used)
            console.log(data.to_pretty);    // TO prettified (if used)
*/
        },
    
        onChange: function (data) {
            // Called every time handle position is changed
            $('input[name=my_valor]').val("R$ " + data.to  + ",00");
        },
    
        onFinish: function (data) {
            // Called then action is done and mouse is released
            $('input[name=my_valor]').val("R$ " +  data.to  + ",00");
        }
        , 
         
//        grid: true,
//        min: 0,
//        max: 1000,
//        from: 50,
        step: 10
//        max_postfix: "+",
//        prefix: "R$ "
         
        // type: "double",
        //min: 0,
        //max: 1000,
        //from: 200,
        //to: 500,
        //grid: true
    });
      </script>
      
      
  </body>
</html>