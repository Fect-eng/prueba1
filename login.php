<?php

include("conexion_MySql/conexion.php");
$conexion = conexion();

$email = $_POST["email"];    //falta crear 
$pass = $_POST["pass"];

$query = ("SELECT * FROM login WHERE usuario = '$email' and password = '$pass'");
//$sql = mysql_query($query, $conexion);
//echo $query; 
$cnn=mysqli_fetch_array($query); 
echo $cnn;
/*
if(!$query){
	echo "<script> alert('Bienvenido $email');window.location= 'inicioDirecciones.php' </script>";
}else{
	echo "<script> alert('Usuario no existe');window.location= 'index.php' </script>";
}
*/
/*
if($nr == 1)
{
	echo "<script> alert('Bienvenido $email');window.location= 'index.php' </script>";
}
else if ($nr == 0) 
{
	echo "<script> alert('Usuario no existe');window.location= 'index.php' </script>";
}
*/
?>
