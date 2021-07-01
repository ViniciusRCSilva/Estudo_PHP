<?php
	date_default_timezone_set('America/Sao_Paulo');

	$data = new DateTime();

	// d - dia | m - mês | Y - ano
	// H - hora | i - minutos | s - segundos
	// echo $data->format('d-m-Y H:i:s');

	/*
	"P" representação de período: vem antes de dia, mês, ano e semana
		Y anos
		M meses
		D dias
		W semanas

	"T" representação de tempo: vem ante de hora, minuto e segundo
		H horas
		M minutos
		S segundos
	*/
	$intervalo = new DateInterval('P5DT10H50M');
	// add -> adiciona
	$data->add($intervalo);
	// sub -> subtrai
	$data->sub($intervalo);

	echo $data->format('d/m/Y - H:i:s');
?>