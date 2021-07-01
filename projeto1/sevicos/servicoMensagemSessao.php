<?php
	session_start();

	// função :(retorna) algo(int, float, string, void...)
	function setMensagemErro(string $mensagem) : void {
		$_SESSION['mensagem-de-erro'] = $mensagem;
	}

	// função : ?algo(pode retornar tanto o que foi pedido, quanto null)
	function getMensagemErro() : ?string {
		if(isset($_SESSION['mensagem-de-erro']))
			return $_SESSION['mensagem-de-erro'];

		return null;
	}
//---------------------------------------------------------------------------
	function setMensagemSucesso(string $mensagem) : void {
		$_SESSION['mensagem-de-sucesso'] = $mensagem;
	}

	function getMensagemSucesso() : ?string {
		if(isset($_SESSION['mensagem-de-sucesso']))
			return $_SESSION['mensagem-de-sucesso'];

		return null;
	}
//---------------------------------------------------------------------------
	function removerMensagemErro() : void {
		if(isset($_SESSION['mensagem-de-erro']))
			unset($_SESSION['mensagem-de-erro']);
	}

	function removerMensagemSucesso() : void {
		if(isset($_SESSION['mensagem-de-sucesso']))
			unset($_SESSION['mensagem-de-sucesso']);
	}	
?>