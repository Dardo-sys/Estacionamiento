<?php

include 'accesoadatos.php';

$miObjeto = new stdClass();
$miObjeto->nombre = $_GET['nombre'];
$miObjeto->contraseña = $_GET['contraseña'];


$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
$select="INSERT INTO usuario( nombre, clave) VALUES ('$miObjeto->nombre','$miObjeto->contraseña')";
$consulta =$objetoAccesoDato->RetornarConsulta($select);
$consulta->execute();

header("Location: ../paginas/ok.php");


//$archivo = fopen('../archivos/registro.txt', 'a');
//fwrite($archivo, json_encode($miObjeto)."\n");
//header("Location: ../paginas/ok.php");
//fclose($archivo);
?>