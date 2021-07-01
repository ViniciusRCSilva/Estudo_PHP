<?php
	function defineCategoriaCompetidor(string $nome, string $idade) : ?string{
		// Criação das variáveis
		// Criação de um array vazio
		$categorias = [];
		// Inserindo conteúdo dentro do array 
		$categorias[] = 'Infantil';
		$categorias[] = 'Adolescente';
		$categorias[] = 'Adulto';

		// Condicionais
		if(validaNome($nome) && validaIdade($idade)){
			removerMensagemErro();
			if ($idade >= 6 && $idade <= 12) {
				// Laço de repetição
				for ($i = 0; $i <= count($categorias); $i++) { 
					if ($categorias[$i] == 'Infantil'){
						// O ponto concatena strings
						setMensagemSucesso("O nadador ".$nome." compete na categoria ".$categorias[$i]);
						return null;
					}
				}
			}else if ($idade >= 13 && $idade <= 18){
				for ($i = 0; $i <= count($categorias); $i++) { 
					if ($categorias[$i] == 'Adolescente'){
						setMensagemSucesso("O nadador ".$nome." compete na categoria ".$categorias[$i]);
						return null;
					}
				}
			}else{
				for ($i = 0; $i <= count($categorias); $i++) { 
					if ($categorias[$i] == 'Adulto'){
						setMensagemSucesso("O nadador ".$nome." compete na categoria ".$categorias[$i]);
						return null;
					}
				}
			}
		}else{
			removerMensagemSucesso();
			return getMensagemErro();
		}
	}	
?>