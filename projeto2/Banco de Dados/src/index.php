<?php
	require 'Produto.php';

	$produto = new Produto();

	switch ($_GET['operation']) {
		case 'list':
			echo "<h3>Produtos:</h3>";

			foreach ($produto->list() as $key => $value) {
				echo "ID: ".$value['id']."<br>Descrição: ".$value['descricao']."<hr>";
			}
			break;
		
		case 'insert':
			$status = $produto->insert('Descricao Produto Outro Teste');

			if (!$status) {
				echo "Não foi possível executar a operação!";
				return false;
			}

			echo "Registro inserido com sucesso!";
			break;

		case 'update':
			$status = $produto->update('Descricao Produto Teste Alterado', 2);

			if (!$status) {
				echo "Não foi possível executar a operação!";
				return false;
			}

			echo "Registro atualizado com sucesso!";
			break;

		case 'delete':
			$status = $produto->delete(4);

			if (!$status) {
				echo "Não foi possível executar a operação!";
				return false;
			}

			echo "Registro removido com sucesso!";
			break;

		default:
			echo "Opção inválida!";
			break;
	}
?>