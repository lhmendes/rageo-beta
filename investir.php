<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" type="text/css" media="all" href="vendors/horizontal-slider/css/styles?.css">    

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
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
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title"> 
                      <h3>Tomadores</h3>
                  </div>
                    
                  <div class="x_content">                      
                    <nav class="slidernav">
                      <div id="navbtns" class="clearfix">
                          <button class="previous">Anterior</button>
                          <button class="next">Próximo</button>
                      </div>
                    </nav>

                      
    <div class="crsl-items" data-navigation="navbtns">
      <div class="crsl-wrap">

        <div class="crsl-item">
          <div class="thumbnail">
            <img src="images/alexandre.png" alt="Alexandre"  width="190" height="190">
            <span class="postdate">R$ 3.000,00</span>
          </div>          
          <h3><a href="#">Alexandre Lara</a></h3>
          <p>Morbi quis tempus leo, eget vestibulum quam. Pellentesque ac orci urna. Proin vitae neque vel metus pulvinar luctus vitae eu nulla.</p>
          <p class="readmore"><a href="#">Read More &raquo;</a></p>
        </div><!-- post #5 -->
          
        <div class="crsl-item">
          <div class="thumbnail">
            <img src="images/andrea.jpeg" alt="Andréa" width="190" height="190">
            <span class="postdate">R$ 1.000,00</span>
          </div>          
          <h3><a href="#">Andréa Mendes</a></h3> 
          <p>Suspendisse laoreet eu tortor vel dapibus. Etiam auctor nisl mattis, ornare nibh eu, lobortis leo. Sed congue mi eget velit dictum, id dictum massa tempus. Cras lobortis lectus neque. Fusce aliquet mauris ac bibendum pharetra.</p>
          <p class="readmore"><a href="#">Ler Mais &raquo;</a></p>
        </div><!-- post #2 -->          

        <div class="crsl-item">
          <div class="thumbnail">
            <img src="images/eduardo.png" alt="Eduardo" width="190" height="190">
            <span class="postdate">R$ 2.500,00</span>
          </div>
          <h3><a href="#">Eduardo Silva</a></h3>
          <p>Vestibulum in venenatis velit. Praesent commodo eget purus sed interdum. Curabitur faucibus purus ut erat fermentum posuere. Suspendisse blandit viverra sagittis. Nullam cursus scelerisque lorem ut ornare.</p>
          <p class="readmore"><a href="#">Read More &raquo;</a></p>
        </div><!-- post #1 -->
          
        <div class="crsl-item">
          <div class="thumbnail">
            <img src="images/juscelino.png" alt="Juscelino"  width="190" height="190">
            <span class="postdate">R$ 800,00</span>
          </div>          
          <h3><a href="#">Juscelino Aquino</a></h3>
          <p>Cras eget interdum nunc. Nam suscipit congue augue, id interdum risus adipiscing nec. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla non diam id nisi tempus sodales.</p>
          <p class="readmore"><a href="#">Read More &raquo;</a></p>
        </div><!-- post #3 -->
        
        <div class="crsl-item">
          <div class="thumbnail">
            <img src="images/luizhenrique.jpg" alt="apple ipod classic photo"  width="190" height="190">
            <span class="postdate">23 Fev 1971</span>
          </div>          
          <h3><a href="#">Luiz Henrique</a></h3>  
          <p>Phasellus condimentum enim nisl, volutpat dapibus turpis euismod nec. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec id elit lorem. Vivamus at eros elit. Nullam cursus euismod purus.</p>
          <p class="readmore"><a href="#">Read More &raquo;</a></p>
        </div><!-- post #4 -->
        

          
      </div><!-- @end .crsl-wrap -->
    </div><!-- @end .crsl-items -->                      
                      
                      
                      
                      
                      
                      
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
    <script src="vendors/horizontal-slider/js/responsiveCarousel.min.js"></script>
      
    <script type="text/javascript">
    $(function(){
      $('.crsl-items').carousel({
        visible: 3,
        itemMinWidth: 180,
        itemEqualHeight: 370,
        itemMargin: 9,
      });

      $("a").on('click', function(e) {
        e.preventDefault();
      });
    });
    </script>      
  </body>
</html>
