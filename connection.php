<?php
	function DBConnect(){
		$sql = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE) or die (mysqli_error());
		mysqli_set_charset($sql, CHARSET) or die (mysqli_error($sql));
		
		return $sql;
	}


	// Essa função fecha todas as querys
	function DBClose($sql){
		@mysqli_close($sql) or die (mysqli_error($sql));
	}


	//Essa função executa todas as querys
	function DBExecute($query){
		$sql = DBConnect();

		$result = @mysqli_query($sql, $query) or die(mysqli_error($sql));
		DBClose($sql);
		return $result;
	}

	//Função para consultar, depois explico ela depois
	function DBRead($tabela, $parametro = null, $colunas = "*"){
		$parametro = ($parametro) ? " {$parametro}": null;
		$colunas = ($colunas) ? " {$colunas}" : "*";
		$sql = "SELECT {$colunas} FROM {$tabela}{$parametro}";

		$result = DBExecute($sql);

		if (!mysqli_num_rows($result)){
			return false;
		} else {
			while ($res = mysqli_fetch_assoc($result)){
				$data[] = $res;
			}
		}

		return $data;
	}

?>