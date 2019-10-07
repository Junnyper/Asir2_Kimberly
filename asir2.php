<html>
<head>
<title>catalogo</title>
</head>
<body>
Kim </br>
<a href="https://github.com/Junnyper/Asir2_Kimberly">Kim</a> </br>
<a href="">Kevin</a> </br>
<a href="">James</a> </br>
<a href="">Alejandro</a> </br>
<a href="">Daniel Hernandez</a> </br>
<a href="">Daniel Martinez</a> </br>
<a href="">Jose</a> </br>
<a href="">Sebastian</a> </br>
<a href="">Matias</a> </br>
<a href="">Luis</a> </br>
<a href="">Alvaro Serrano</a> </br>
<a href="">Alberto</a> </br>
<a href="">Xanders</a> </br>
<?php
$f=fopen('visitas.txt','a');
fwrite($f,$_SERVER['REMOTE_ADDR']."\r\n");
fclose($f)
?>
</body>
</html>