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
    <!-- bootstrap-daterangepicker -->
    <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

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
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <?php
               include_once('menu_lateral.php');
            ?>
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
                    <img src="<?php echo "$foto";?>" alt=""> <?php echo "$logado";?>
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
            <div class="row top_tiles">
              <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-money"></i></div>
                  <div class="count">R$ 1.000,<span style="font-size:16px ">00</span> </div>
                  <h3>Total Investido</h3>
                  <p>35% retornado</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-comments-o"></i></div>
                  <div class="count">R$ 1.200,<span style="font-size:16px ">00</span> </div>
                  <h3>Saldo a receber</h3>
                  <p>Rendimento de 20% (R$ 200,00)</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-user"></i></div>
                  <div class="count">03</div>
                  <h3>Beneficiados</h3>
                  <p>Quantidade de Tomadores</p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Resumo das Transações <small>Progresso semanal</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-9 col-sm-12 col-xs-12">
                    <div id="echart_line" style="height:350px;"></div>
                    <div id="echart_line2" style="height:350px;"></div>
                      
                    </div>

                    <div class="col-md-3 col-sm-12 col-xs-12">
                      <div>
                        <div class="x_title">
                          <h2>Top Profiles</h2>
                          <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                              <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                              </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                          </ul>
                          <div class="clearfix"></div>
                        </div>
                        <ul class="list-unstyled top_profiles scroll-view">
                          <li class="media event">
                            <a class="pull-left">
                                <img src="images/eduardo.png" alt="Profile Image" style="width:50px;height:50px; margin: 5px 10px 5px 0;border-radius: 50%;"/>
                            </a>
                            <div class="media-body">
                              <a class="title" href="#">Eduardo Silva</a>
                              <p><strong>$2300. </strong> Agent Avarage Sales </p>
                              <p> <small>12 Sales Today</small>
                              </p>
                            </div>
                          </li>
                          <li class="media event">
                            <a class="pull-left">
                               <img src="images/juscelino.png" alt="Profile Image" style="width: 50px;height: 50px; margin: 5px 10px 5px 0;border-radius: 50%;"/>
                            </a>
                            <div class="media-body">
                              <a class="title" href="#">Juscelino Aquino</a>
                              <p><strong>$2300. </strong> Agent Avarage Sales </p>
                              <p> <small>12 Sales Today</small>
                              </p>
                            </div>
                          </li>
                          <li class="media event">
                            <a class="pull-left">
                                <img src="images/alexandre.png" alt="Profile Image" style="width: 50px;height: 50px; margin: 5px 10px 5px 0;border-radius: 50%;"/>
                            </a>
                            <div class="media-body">
                              <a class="title" href="#">Alexandre Lara</a>
                              <p><strong>$2300. </strong> Agent Avarage Sales </p>
                              <p> <small>12 Sales Today</small>
                              </p>
                            </div>
                          </li>
                          <li class="media event">
                            <a class="pull-left">
                                <img src="images/img.jpg" alt="Profile Image" style="width: 50px;height: 50px; margin: 5px 10px 5px 0;border-radius: 50%; "/>
                            </a>
                            <div class="media-body">
                              <a class="title" href="#">Luiz Henrique</a>
                              <p><strong>$2300. </strong> Agent Avarage Sales </p>
                              <p> <small>12 Sales Today</small>
                              </p>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>

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
    <!-- Chart.js -->
    <script src="vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- Flot -->
    <script src="vendors/Flot/jquery.flot.js"></script>
    <script src="vendors/Flot/jquery.flot.pie.js"></script>
    <script src="vendors/Flot/jquery.flot.time.js"></script>
    <script src="vendors/Flot/jquery.flot.stack.js"></script>
    <script src="vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="vendors/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- ECharts -->
    <script src="vendors/echarts/dist/echarts.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>

    <script type="text/javascript">
        // based on prepared DOM, initialize echarts instance
        var myChart = echarts.init(document.getElementById('echart_line2'));

        // specify chart configuration item and data
        var option = {
            title: {
                text: 'ECharts entry example'
            },
            tooltip: {},
            legend: {
                data:['Sales', 'dois']
            },
            xAxis: {
                data: ["shirt","cardign","chiffon shirt","pants","heels","socks"]
            },
            yAxis: {},
            series: [{
                name: 'Sales',
                type: 'line',
                data: [5, 20, 36, 10, 10, 20]
            },{
                name: 'Sales2',
                type: 'line',
                data: [25, 10, 16, 20, 8, 12]
            }
        ]
        };

        // use configuration item and data specified to show chart
        myChart.setOption(option);
    </script>


  </body>
</html>