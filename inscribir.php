<?php
$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$clave = md5($clave);

$link = mysql_connect('localhost','root','root');
mysql_select_db('201113');
mysql_query("INSERT INTO usuarios VALUES('','$nombre','$usuario','$clave')");
mysql_close();


?>