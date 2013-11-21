<?php
$archivo = $_FILES['foto']['tmp_name'];
$nombreArchivo = $_FILES['foto']['name'];
$ruta = "imagenes";
$idFoto = rand(0,200);
$nombreArchivo = $idFoto."-".$nombreArchivo;

move_uploaded_file($archivo,$ruta."/".$nombreArchivo);
$ruta=$ruta."/".$nombreArchivo;

$link = mysql_connect('localhost','root','root');
mysql_select_db('201113');
mysql_query("INSERT INTO fotos VALUES('','$ruta')");
mysql_close();

echo "<img src=".$ruta.">";

?>