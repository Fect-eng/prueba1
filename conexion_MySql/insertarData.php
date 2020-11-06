<?php
   
   require_once "conexion.php";  /*pagina de conexion en carpeta conexion*/
   $conexion=conexion();

$nom=$_POST['nom'];
$ape=$_POST['ape'];
$dni=$_POST['dni'];
$domicilio=$_POST['domicilio'];
$fec_nac=$_POST['fec_nac']; 
$tel=$_POST['tel'];
$email=$_POST['email'];


   $sql="INSERT into conductors (nom,ape,dni,domicilio,fec_nac,tel,email)
   								values ('$nom','$ape','$dni','$domicilio','$fec_nac','$tel','$email')";
      echo $result=mysqli_query($conexion,$sql);
      
      if($conexion->connect_errno){
         echo "El sitio Web Tiene Problemas Verificar";
      }
   	
?>
