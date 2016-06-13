<?php 
	include_once ("config.php");
	include_once ("connection.php");
?>

<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Cadastro de usuário</title>
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
	<script type="text/javascript">
		window.onload = function(){
			<?php
			$codInstituicao = $_GET['codInstituicao'];

			?>

		}
	</script>


	<?php 

			
		
		if (isset($_POST['cadastrar'])) {
			$conn = DBConnect();

			$nome = $_POST['nome'];
			$endereco = $_POST['endereco'];
			$vagas = $_POST['vagas'];
			$zona = $_POST["zona"];
			$dados = DBRead('zonas',"WHERE nome = '$zona' ",'codZonas');
			$codInstituicao = $_GET['codInstituicao2'];
					foreach ($dados as $key) {
						$codZonas = $key['codZonas'];

					}

				$sql = "INSERT INTO abrigos (nome, codZonas, endereco, vagas, codInstituicao) VALUES ('$nome', $codZonas, '$endereco', $vagas, $codInstituicao)";
				$check = mysqli_query($conn, $sql);
				if ($check == true) {
					echo "<script>alert('Abrigo cadastrado com sucesso!')</script>";
				}
				else{
					echo "<script>alert('Dados inválidos!')</script>";
				}
				

		}

	?>





<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->

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
                          <h4 class="widget-title"><b>CADASTRO DE ABRIGO</b></h4>
                          <p>&nbsp;</p>
                          <p>	<form action="" method="POST">
		<fieldset>
			
			<p>
				Nome o abrigo: <input type="text" name="nome" required />
			</p>
			<p>&nbsp;</p>

			<p>Zona:<select name="zona">
				<option value="centrosul">Centro-Sul</option>
				<option value="leste">Leste</option>
				<option value="nordeste">Nordeste</option>
				<option value="noroeste">Noroeste</option>
				<option value="norte">Norte</option>
				<option value="sudeste">Sudeste</option>
				<option value="sudoeste">Sudoeste</option>
				<option value="oeste">Oeste</option>
				<option value="sul">Sul</option>
			</select>
			</p>			
			<p>&nbsp;</p>

			<p>
				Endereço: <input type="text" name="endereco" required />
			</p>
			<p>&nbsp;</p>
			<p>
				Vagas: <input type="text" name="vagas" required />
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