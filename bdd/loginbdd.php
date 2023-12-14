<?php 



$usu = $_POST['usuario'];
$cl = $_POST['clave'];


// salida de informacion


	$base = "proyecto";
$Conexion =  mysqli_connect("localhost","root","",$base);

$cadena = "INSERT INTO usuario (usuario, clave) VALUES ('$usu', '$cl')";

$resultado = mysqli_query($Conexion,$cadena);

if($resultado){
	print "se ha insertado un registro"."<br>";
}else{
	print "NO se ha generado un registro"."<br>";
}

?>