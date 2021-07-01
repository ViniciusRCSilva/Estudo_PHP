<?php
	function validarUsuario(array $usuario) : bool {
		if(empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade'])) {
			throw new Exception("Os campos obrigatórios precisam ser preenchidos!<br>");
			
		}

		return true;
	}

	$usuario = ['codigo'=>1, 'nome'=>'', 'idade'=>57];

	try {
		$status = validarUsuario($usuario);
	} catch (Exception $e) {
		echo $e->getMessage();
	} finally {
		echo "Status de operação: ".(int)$status; // cast
		die();
	}

	echo "<br>... executando ...<br>";
?>