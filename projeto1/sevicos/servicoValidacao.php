<?php
	function validaNome(string $nome) : bool{
		if (empty($nome)) {
			setMensagemErro('O nome deve ser preenchido!');
			// Volta para a página do formulário.
			// header('location: forms_natacao.php');
			return false;
		}
		else if (strlen($nome) < 2) {
			setMensagemErro('O nome deve conter pelo menos 2 caracteres!');
			return false;
		}
		else if (strlen($nome) > 20) {
			setMensagemErro('O nome deve conter menos de 20 caracteres!');
			return false;
		}
		return true;
	}
//---------------------------------------------------------------------------	
	function validaIdade(string $idade) : bool{
		if (empty($idade)) {
			setMensagemErro('A idade deve ser preenchida!');
			return false;
		}
		// is_int
		// is_float
		// is_string
		// ...
		// Servem para confirmar aquilo que foi inserido.
		else if (!is_numeric($idade)) {
			setMensagemErro('A idade deve ser numérica!');
			return false;
		}
		return true;
	}
?>