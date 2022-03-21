<?php
require_once dirname(__FILE__).'/../config.php';

$kwota = $_REQUEST ['kwota'];
$oprocentowanie = $_REQUEST ['oprocentowanie'];
$czas = $_REQUEST ['czas'];

if ( ! (isset($kwota)&& isset($oprocentowanie))) {
	$messages [] = 'Błąd aplikacji. Brak jednego z parametrów!';
}

if ( $kwota == "") {
	$messages [] = 'Nie podano kwoty';
}
if ( $oprocentowanie == "") {
	$messages [] = 'Nie podano oprocentowania';
}

if (empty( $messages )) {
	

	if (! is_numeric( $kwota )) {
		$messages [] = 'Kwota nie jest liczbą całkowitą';
	}
	
}

if (empty ( $messages )) {
	
	$kwota = intval($kwota);
	$oprocentowanie = intval($oprocentowanie);
	$opr = $oprocentowanie/100;

	switch ($czas) {
		case '6m' :
			$kw_calkowita = $kwota + ($kwota *$opr);
			$rata = $kw_calkowita/6;
			break;
		case '12m' :
			$kw_calkowita = $kwota + ($kwota *$opr);
			$rata = $kw_calkowita/12;
			break;
		case '2r' :
			$kw_calkowita = $kwota + ($kwota *$opr);
			$rata = $kw_calkowita/24;
			break;
		case '3r' :
			$kw_calkowita = $kwota + ($kwota *$opr);
			$rata = $kw_calkowita/(12*3);
			break;
		case '5r' :
			$kw_calkowita = $kwota + ($kwota *$opr);
			$rata = $kw_calkowita/(12*5);
			break;
		case '10r' :
			$kw_calkowita = $kwota + ($kwota *$opr);
			$rata = $kw_calkowita/(12*10);
			break;
		case '15r' :
			$kw_calkowita = $kwota + ($kwota *$opr);
			$rata = $kw_calkowita/(12*15);
			break;
		case '20r' :
			$kw_calkowita = $kwota + ($kwota *$opr);
			$rata = $kw_calkowita/(12*20);
			break;
		case '25r' :
			$kw_calkowita = $kwota + ($kwota *$opr);
			$rata = $kw_calkowita/(12*25);
			break;

	}
}

include 'kalkulator_widok.php';