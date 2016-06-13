
<!DOCTYPE html>
<?php


  include_once("config.php");
  include_once("connection.php");
  if(isset($_POST['entrar'])){
    $conn = DBConnect();
    $login  = mysqli_escape_string($conn, $_POST['login']);
    $senha = mysqli_escape_string($conn, $_POST['senha']);

    $res = DBRead('login', "WHERE login = '$login' AND senha = '$senha'");
    foreach ($res as $key) {
    $codInstituicao = $key['codInstituicao'];

    }
    if ($res){
        $_SESSION['UsuarioLog'] = true;
        header("location: pagina_usuario.php?codInstituicao=$codInstituicao");
        } else {
            echo "<script>alert('Não encontrado')</script>";
        }
  }
  ?>
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
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    
        <!-- SIDEBAR -->

        

 

        <!-- MAIN CONTENT -->
        <div class="main-content text-center">
            <div class="fluid-container">

                <div class="content-wrapper text-center">
                <!-- SAÚDE -->
                    <div class="page-section" id="login">
                    <div class="row text-center">
                        <div class="col-md-5 text-center">
                          <h4 class="widget-title"><b>LOGIN</b></h4>
                          <p>&nbsp;</p>
                          <p>Aqui você, organização, usa sua conta para adicionar abrigos e ofertas de emprego ao banco de dados do site e, além disso, pode realizar a manutenção dessas informações, as quais poderão ser muito úteis para alguém.</p>
                        </div>
                    </div>
                    </div>
                    <p>&nbsp;</p>
                    <form action="" method="POST">
                      <fieldset>
                        <p>
                            Login <input type="text" name="login" required>
                        </p>
                        <p>&nbsp;</p>
                        <p>
                            Senha <input type="password" name="senha" required>
                        </p>
                        <p>&nbsp;</p>
                        <p>
                            <input type = "submit" name = "entrar" value = "Entrar">
                        </p>
                        <p>
                          <a href="cadastro_login.php">Se você ainda não possui cadastro, clique aqui.<em class=""></em>
                        </p>
                        <p>
                        <a href="index.html">Clique aqui para voltar para a página inicial.<em class=""></em>
                        </p>
                      </fieldset>
                    </form>
                    <hr>
                    <div class="row text-center" id="footer">
                        <div class="col-md-5 text-center">
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