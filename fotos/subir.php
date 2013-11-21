<?php
$archivo = $_FILES['foto']['tmp_name'];
$nombreArchivo = $_FILES['foto']['name'];
$ruta = "imagenes";

move_uploaded_file($archivo,$ruta."/".$nombreArchivo);

?>