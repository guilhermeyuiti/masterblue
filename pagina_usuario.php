
<!DOCTYPE html>


<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Aidapt: Ajudando refugiados a se adaptar</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/font-awesome.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/templatemo-style.css">
        
        <script src="assets/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
    <?php
    if (isset($_GET['deslogar'])){
    session_destroy();
    header("Location: index.html");              
    }
    if (isset($_GET['linkabrigo'])){
        $codInstituicao = $_GET['codInstituicao'];
        header("Location: cadastro_abrigo.php?codInstituicao=$codInstituicao");
    }

?>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    
         <div class="responsive-header visible-xs visible-sm">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="top-section">
                                <div class="profile-content">
                                <h3 class="profile-title">CADASTRO DE INFORMAÇÕES</h3>
                                <p class="profile-description">Ofereça empregos e abrigos por meio de seu cadastro no site.</p>
                            </div>
                        </div>
                    </div>
                </div> 
                <a href="#" class="toggle-menu"><i class="fa fa-bars"></i></a>
                <div class="main-navigation responsive-menu">
                    <ul class="navigation">
                        <li><a href="#top"><i class"fa fa-info-circle"></i>CADASTRO DE INFORMAÇÕES</a></li>
                        <li><a href="#abrigo"><i class="fa fa-ambulance"></i>Abrigos</a></li>
                        <li><a href="#emprego"><i class="fa fa-briefcase"></i>Empregos</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- SIDEBAR -->
        <div class="sidebar-menu hidden-xs hidden-sm">
            <div class="top-section">
                <p class="fa fa-home">&nbsp;</p>
                <a href="index.html" style="profile-title color: #FFFFFF; color: #FFFFFF; font-family: robotobold; font-size: large;">Aidapt</a>
            </div> 
            <!-- top-section -->
            <div class="main-navigation">
                <ul class="navigation">
                    <li><a href="#top"><i class"fa fa-info-circle"></i><b>CADASTRO DE INFORMAÕES</b></a></li>
                    <li><a href="#abrigo"><i class="fa fa-ambulance"></i>Abrigos</a></li>
                    <li><a href="#emprego"><i class="fa fa-briefcase"></i>Empregos</a></li>                </ul>
            </div> 
            <!-- .main-navigation -->
            <div class="social-icons">
                <ul>
                <li><a href="http://www.facebook.com/aidapt.project"><i class="fa fa-facebook"></i></a></li>
                <li><a href="http://www.twitter.com/aidaptpoli"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UCY5LA0zQdFBrbifNWpAPb7A"><i class="fa fa-youtube"></i></a></li>                </ul>
            </div> <!-- .social-icons -->
        </div> <!-- .sidebar-menu -->
        

        <div class="banner-bg" id="top">
            <div class="banner-overlay"></div>
            <div class="welcome-text">
                <h2>Ofereça empregos e abrigos por meio de seu cadastro no site.</h2>
                <h5>Pensando para o futuro. Cadastre aqui informações úteis para alguém, como abrigos e empregos.</h5>
            </div>
        </div>

        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="fluid-container">

                <div class="content-wrapper">
                <!-- SAÚDE -->
                    <div class="page-section" id="abrigo">
                    <div class="row">
                        <div class="col-md-12">
                          <h4 class="widget-title">Abrigo</h4>
                          <p>&nbsp;</p>
                          <p>Aqui você, como organiação governamental, não governamental ou empresa, tem a possibilidade de ofercer abrigo para refugiados mediante ao seu cadastro no site. Ao efetuar o cadastro do abrigo, a Aidapt irá imediatamente disponibilizar esses dados publicamente para que sejam usufruídos pelos que precisam de algum tipo de moradia.</p>
                          <p>&nbsp;</p>
                          <p>
                          <?php
                          $codIstituicao = $_GET['codInstituicao'];
                          <a href="?linkabrigo+codInstituicao=$codInstituicao">CADASTRO DE ABRIGO </a><em class=""></em>
                        ?>
                          </p>
                        </div>
                    </div>
                    </div>
                    <hr>
                    <div class="page-section" id="emprego">
                    <div class="row">
                        <div class="col-md-12">
                          <h4 class="widget-title">Emprego</h4>
                          <p>&nbsp;</p>
                          <p>Aqui você, como organiação governamental, não governamental ou empresa, tem a possibilidade de ofercer emprego para refugiados mediante ao seu cadastro no site. Ao efetuar o cadastro, a Aidapt irá imediatamente disponibilizar esses dados publicamente para que sejam usufruídos pelos que precisam de algum suporte financeiro.</p>
                          <p>&nbsp;</p><em class=""></em>
                          <p>
                          <?php

                          echo '<a href="cadastro_emprego.php?codInstituicao=">CADASTRO DE EMPREGO</a><em class=""></em>';
                          ?>

                          </p>
                        </div>
                    </div>
                    </div>
                          <p>&nbsp;</p>
                          <p>&nbsp;</p>
                          <p>&nbsp;</p>
                          <p>&nbsp;</p>
                    
                    <h1><a href="?deslogar">SAIR</a></h1>

                    <hr>
                    
                    
                          <p>&nbsp;</p>
                          <p>&nbsp;</p>
                          <p>&nbsp;</p>
                          <p>&nbsp;</p>
                        </div>
                    </div>
                    </div>
                    


                    <div class="row" id="footer">
                        <div class="col-md-12 text-center">
                            <p class="copyright-text">Copyright &copy; 2016 Aidapt</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <script src="assets/js/vendor/jquery-1.10.2.min.js"></script>
        <script src="assets/js/min/plugins.min.js"></script>
        <script src="assets/js/min/main.min.js"></script>

    </body>
</html>