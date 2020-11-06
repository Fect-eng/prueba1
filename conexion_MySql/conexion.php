
<?php
		function conexion(){
			$servidor="localhost";
			$usuario="root";
			$password="";
			$bd="taxifem";

			$conexion=mysqli_connect($servidor,$usuario,$password,$bd);

            if(!$conexion)
{
	die("No hay conexion revisa: ".mysqli_connect_error());	
}
			return $conexion;
		}

?> 