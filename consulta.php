<?php
	include_once("config.php");
	include_once("connection.php");

?>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		
		$dados = DBRead('abrigos', 'inner join zonas on abrigos.codZonas = zonas.codZonas
        inner join instituicao on abrigos.codInstituicao = instituicao.codInstituicao', "abrigos.nome as 'abrigo', zonas.nome as 'zona', abrigos.vagas as 'vagas', abrigos.endereco as 'endereco', instituicao.nome as 'instituicao'");

		//Man, usa essa função DBread toda vez que quiser consultar o banco
		// Os parâmetro são: Nome da tabela e se tiver inner join coloca entre aspas como segundo segundo parametro
		echo "Lista de abrigos: ";
		echo "<p>&nbsp;</p>";
		foreach ($dados as $key) {
			echo "<fieldset>";
			echo "Nome do abrigo :".$key['abrigo'];
			echo "<p>&nbsp;</p>";
			echo "Zona  :".$key['zona'];
			echo "<p>&nbsp;</p>";
			echo "Vagas :".$key['vagas'];
			echo "<p>&nbsp;</p>";
			echo "Endereco :".$key['endereco'];
			echo "<p>&nbsp;</p>";
			echo "Nome do abrigo :".$key['abrigo'];
			echo "<p>&nbsp;</p>";
			echo "</fieldset>";

		}
			
		
	?>
</body>
</html>