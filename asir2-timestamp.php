Holiwi </br>
<a href="https://192.168.0.36/asir2_James/asir2.html">Jaimis</a> </br>
<a href="https://192.168.0.34/asir2_Kevin/asir2.html">Kev</a>
<?php
$dns=[
	'192.168.0.105'=>'  Jaime',
	'192.168.0.100'=>'  Jose Luis',
	'::1'=>'  Kim',
	];

$f=fopen('all.txt','a');
fwrite($f, date('Y-m-d H:i:s').($dns[$_SERVER['REMOTE_ADDR']]."\r\n"));
fclose($f);
?>