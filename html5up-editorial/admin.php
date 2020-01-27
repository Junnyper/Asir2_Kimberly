<?php
if(isset($_GET['logout'])){
session_destroy();
unset($_SESSION);
}
session_start();
if(isset($_POST['password']) and $_POST['hola']=='hola')
$_SESSION ['validado']=1;
if(!isset($_SESSION['validado'])){
    echo '<form method="post">
            <input type="text" name="user" placeholder="User"/>
            <input type="text" name="password" placeholder="Password"/>
         </form>';
    exit();
}

$conectar = new mysqli('localhost','id11932593_admin','admin','id11932593_info_formulario');
$rs=$conectar->query("SELECT * FROM bbdd");
$r=$rs->fetch_all(MYSQLI_ASSOC);
print_r($r);
?>

<html>
<a href="?logout=1"> Cerrar </a>
</html>
