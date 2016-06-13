<?php 
	include_once ("config.php");
	include_once ("connection.php");
?>

<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Cadastro de usuário</title>
</head>
<body>


	<?php 
		if (isset($_POST['cadastrar'])) {
			$conn = DBConnect();

			$nome = $_POST['nome'];
			$descricao = $_POST['descricao'];
			$site = $_POST['site'];
			$telefone = $_POST['telefone'];
			$login = $_POST['login'];
			$senha = $_POST['senha'];
			$confirm_senha = $_POST['confirm_senha'];

			if($senha == $confirm_senha){
				$sql = "INSERT INTO instituicao (nome, descricao, site, telefone) VALUES ('$nome', '$descricao', '$site','$telefone')";
				$check = mysqli_query($conn, $sql);

				
				if ($check == true) {
					$codInstituicao = DBRead('instituicao','WHERE codInstituicao = (select MAX(codInstituicao) from instituicao) ','codInstituicao');
					foreach ($codInstituicao as $key) {
						$codInsti = $key['codInstituicao'];

					}
					
					$sql2 = "INSERT INTO login(login, senha, codInstituicao) values ('$login','$senha',$codInsti)";
					$check2 = mysqli_query($conn,$sql2);
					if($check2 == true){
						echo "<script>alert('Dados inseridos com sucesso!')</script>";
						header("location: login.php");
					}else{
						echo "<script>alert('Dados inválidos!')</script>";
					}
				}
				else{
					echo "<script>alert('Dados inválidos!')</script>";
				}

			}else{
				echo "<script>alert('Digite a senha novamente!')</script>";

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
                          <h4 class="widget-title"><b>CADASTRO DA ORGANIZAÇÃO</b></h4>
                          <p>&nbsp;</p>
                          <p>	<form action="" method="POST">
		<fieldset>
			
			<p>
				Nome da organização: <input type="text" name="nome" required />
			</p>
			<p>&nbsp;</p>
			<p>
			Descrição
			</p>

			<p>
			 <textarea name="descricao" rows=10 cols="40" onfocus="this.value ='' "" >Digite uma descrição de sua organização...</textarea>
			</p>
			<p>&nbsp;</p>

			<p>
				Site: <input type="text" name="site" required />
			</p>
			<p>&nbsp;</p>
			<p>
				Telefone: <input type="text" name="telefone" required />
			</p>
			<p>&nbsp;</p>
			<p>
				Login: <input type="text" name="login" required />
			</p>
			<p>&nbsp;</p>
			<p>
				Senha: <input type="password" name="senha" required />
			</p>
			<p>&nbsp;</p>
			<p>
				Confirmação da Senha: <input type="password" name="confirm_senha" required />
			</p>
			<p>&nbsp;</p>

			<p>
				<input type="submit" name="cadastrar" value="Cadastrar">
			</p>

		</fieldset>
	</form></p>
                        </div>
                    </div>
                    </div>
                    <p>&nbsp;</p>
                    <form action="" method="POST">
                      <fieldset>

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