<?php
	include_once("config.php");
	include_once("connection.php");

?>
<html>
<head>
	<title>Testando conexao</title>
</head>
<body>
	<?php
		$testa = DBConnect();
		if($testa){
			echo "Conexao estabelecida com sucesso!";
		}else{
			echo "Conexao falhou!";
		}
			
	?>
</body>
</html>