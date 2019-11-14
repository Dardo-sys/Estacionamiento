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

$consultaSQL="select patente from factura where patente='$miObjeto->patente' ";

$consulta =$objetoAccesoDato->RetornarConsulta($consultaSQL);
$datos= $consulta->fetchAll(PDO::fetch_assoc);
var_dump($datos[0]['patente']);
die();

if(isset($datos[0]["patente"]))
	{
		$select="INSERT INTO factura(patente) VALUES 

header("Location: ../paginas/okregistrovehiculo.php");
 
 
?>