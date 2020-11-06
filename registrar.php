<?php
include("conexion_MySql/conexion.php");
$conexion = conexion();

$email = $_POST["email"];    //falta crear 
$pass = $_POST["pass"];
echo  $email;
echo  $pass;
	//if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['grabardatos']))
	
	//{
	$sqlgrabar = "INSERT INTO login(usuario, password) values ('$email','$pass')";

if(mysqli_query($conexion,$sqlgrabar))
{
	echo "<script> alert('Usuario registrado: $email');window.location= 'index.php' </script>";
}else 
{
	
		die("Error con la Basedatos: ".mysqli_connect_error());	
				return $conexion;
}
		
		
	//}

?>
	