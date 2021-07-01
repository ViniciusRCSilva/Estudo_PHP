<?php
	set_include_path('D:\\XAMPP\\htdocs\\estudo_PHP\\projeto1\\sevicos');
	// O "include" recebe um parâmetro que ele vai ser diretamente um arquivo ou um diretório. 
	include "servicoMensagemSessao.php";
	include "servicoValidacao.php";
	include "servicoCategoriaCompetidor.php";

	// $_POST vai recuperar qualquer informação que for para ele
	// $_GET vai fazer a mesma coisa que o $_POST
	$nome = $_POST['nome'];
	$idade = $_POST['idade'];

	// 'var_dump' traz a informação da variável e do que temos nas variáveis
	// var_dump($nome);
	// var_dump($idade);

	defineCategoriaCompetidor($nome, $idade);
	header('location: forms_natacao.php');

/* Não é preciso colocar "?>" se caso não tiver mais código abaixo do PHP*/
?>