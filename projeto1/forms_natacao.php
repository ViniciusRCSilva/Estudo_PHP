<?php  
	set_include_path('D:\\XAMPP\\htdocs\\estudo_PHP\\projeto1\\sevicos'); 
	include "servicoMensagemSessao.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulário de inscrição</title>
	<meta name="author" content="">
	<meta name="description" content="">
	<meta name="viewport" content="width-device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css"></link>	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"></link>
</head>
<body>
	<h1>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</h1>

	<div class="box">
		<!-- Se o method for igual a "get", as informações vão ser enviadas no formato de query string -->
		<form action="projeto_natacao.php" method="post">
			<div>
				<p>Seu nome <br><input type="text" name="nome" required></p>
			</div>
			<div>
				<p>Sua idade <br><input type="text" name="idade" required></p>
			</div>
			<?php 
				// O "if" é representado por ?
				// O "else" é representado por : 
				$mensagemDeErro = getMensagemErro();
				if (!empty($mensagemDeErro)) {
					echo $mensagemDeErro;
				}

				$mensagemDeSucesso = getMensagemSucesso();
				if (!empty($mensagemDeSucesso)) {
					echo $mensagemDeSucesso;
				}
			?>
			<hr>
			<div>
				<button type="submit">Enviar</button>
			</div>
		</form>		
	</div>
</body>
</html>