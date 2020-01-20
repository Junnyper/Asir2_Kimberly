<?php
//conecta servidor

$conectar = new mysqli('localhost','id11932593_admin','admin','id11932593_info_formulario');

//conexion

if (!$conectar){
    echo "conexión fallida";
    }else{
}

//sentencia sql

$sql="select * from `bbdd`";

//ejecuta

$r=$conectar->query($sql)->fetch_all();
    echo '<pre>';
    print_r($r);
    echo '</pre>';
?>
