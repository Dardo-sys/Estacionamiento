<?php
include 'accesoadatos.php';

 $miObjeto2 = new stdClass();

 date_default_timezone_set('America/Argentina/Buenos_Aires');
 $hora=mktime();

 $miObjeto2->patente = $_GET['patente'];
 $miObjeto2->horaIngreso = $hora;

$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
$select="INSERT INTO registrovehiculo ( patente, horaingreso) VALUES ('$miObjeto2->patente','$miObjeto2->horaIngreso')";
$consulta =$objetoAccesoDato->RetornarConsulta($select);
$consulta->execute();

header("Location: ../paginas/okregistrovehiculo.php");
 
 //$archivo = fopen('../archivos/vehiculos.txt', 'a');
 //fwrite($archivo, json_encode($miObjeto2)."\n");
 //fclose($archivo);
 //header("Location: ../paginas/okregistrovehiculo.php");

?>