<?php

function meses($n){
$meses=[
	'1'=>[
		'mes'=>'enero',
		'estacion'=>'invierno',
		'dias'=>'31',
	],
	'2'=>[
		'mes'=>'febrero',
		'estacion'=>'invierno',
		'dias'=>'28',
	],	
	'3'=>[	
		'marzo',
		'estacion'=>'primavera',
		'dias'=>'31',
	],
	'4'=>[
		'mes'=>'abril',
		'estacion'=>'primavera',
		'dias'=>'30',
	],
	'5'=>[
		'mes'=>'mayo',
		'estacion'=>'primavera',
		'dias'=>'31',
	],
	'6'=>[
		'mes'=>'junio',
		'estacion'=>'vereano',
		'dias'=>'30',
	],
	'7'=>[
		'mes'=>'julio',
		'estacion'=>'verano',
		'dias'=>'31',
	],
	'8'=>[
		'mes'=>'agosto',
		'estacion'=>'verano',
		'dias'=>'31',
	],
	'9'=>[
		'mes'=>'septiembre',
		'estacion'=>'otoño',
		'dias'=>'30',
	],
	'10'=>[
		'mes'=>'octubre',
		'estacion'=>'otoño',
		'dias'=>'31',
	],
	'11'=>[
		'mes'=>'noviembre',
		'estacion'=>'invierno',
		'dias'=>'30',
	],
	'12'=>[
		'mes'=>'diciembre',
		'estacion'=>'invierno',
		'dias'=>'32',
	],
];
return $meses[$n]['mes'];
}

echo meses (2);
?>